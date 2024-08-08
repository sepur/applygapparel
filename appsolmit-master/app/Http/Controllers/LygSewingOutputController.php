<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LygSewingOutput;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Carbon\Carbon;
class LygSewingOutputController extends Controller
{
    public function index()
      {
        return view('sewing.index');
      }
    
    public function read()
    {
        // $data = LygSewingOutput::all();
        // return view('sewing.read')->with(['data'=>$data]);
        $summary = DB::table('lygSewingOutput')
        ->select(
            'TrnDate',
            'StyleCode',
            DB::raw('SUM(QtyOutput) as TotalOutput'),
            DB::raw('COUNT(DISTINCT SizeName) as TotalSize') // Menghitung jumlah ukuran unik
        )
        ->groupBy('TrnDate', 'StyleCode')
        ->orderBy('TrnDate')
        ->orderBy('StyleCode')
        ->get();

        // Mengelompokkan hasil lebih lanjut berdasarkan tanggal dan style code
        $finalSummary = $summary->groupBy(function($item) {
            return $item->TrnDate . '-' . $item->StyleCode;
        })->map(function($items) {
            $firstItem = $items->first();
            return [
                'Date' => $firstItem->TrnDate,
                'StyleCode' => $firstItem->StyleCode,
                'TotalSize' => $items->sum('TotalSize'), // Total ukuran
                'TotalOutput' => $items->sum('TotalOutput')
            ];
        })->values(); // Reset keys after map
      return view('sewing.read', compact('finalSummary'));
    }
    public function showDetails(Request $request)
    {
        $date = $request->input('date');
        $styleCode = $request->input('styleCode');
    
        // Ambil ukuran unik dari database berdasarkan StyleCode
        $sizes = LygSewingOutput::where('TrnDate', $date)
            ->where('StyleCode', $styleCode)
            ->distinct()
            ->pluck('SizeName');
    
        // Ambil data detail
        $details = LygSewingOutput::where('TrnDate', $date)
            ->where('StyleCode', $styleCode)
            ->select('OperatorName', 'SizeName', 'QtyOutput', 'DestinationCode')
            ->get();
    
        // Kelompokkan data berdasarkan OperatorName dan DestinationCode
        $groupedDetails = $details->groupBy('OperatorName')->map(function ($operatorGroup) use ($sizes) {
            return $operatorGroup->groupBy('DestinationCode')->map(function ($destinationGroup) use ($sizes) {
                return $sizes->mapWithKeys(function ($sizeName) use ($destinationGroup) {
                    $sizeGroup = $destinationGroup->where('SizeName', $sizeName);
                    return [$sizeName => $sizeGroup->sum('QtyOutput')];
                });
            });
        });
    
        return view('sewing.details', compact('groupedDetails', 'sizes'));
    }
        public function update(Request $request)
        {

            $size = $request->input('size');
            $destination = $request->input('destination');
            $operator = $request->input('operator');
            $value = $request->input('value');
            
            DB::table('lygSewingOutput')
            ->where('SizeName', $size)
            ->where('DestinationCode', $destination)
            ->where('OperatorName', $operator)
            ->update(['QtyOutput' => $value]);
            return response()->json(['status' => 'success']);
        }

        public function updateSummary()
    {
        $totalSize = DB::table('lygSewingOutput')
            ->select(DB::raw('COUNT(DISTINCT SizeName) as TotalSize'))
            ->first();
        return response()->json(['totalSize' => $totalSize->TotalSize]);
    }
}

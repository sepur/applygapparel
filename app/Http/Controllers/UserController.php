<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Departemen;
use Carbon\Carbon;
use Validator;
use PDF;



class UserController extends Controller
{

  public function index()
      {
        return view('usr.index');
      }
    public function adduser()
      {
        $dep = Departemen::all();
        return view('usr.create', compact('dep'));
      }

    public function saveuser(Request $request)
    {
	      #$id_user = Auth::user();
	      $skr =  Carbon::now();
        $validator = Validator::make($request->all(), [
	          'name' => 'required',
            'email' => 'required',
            #'departemen' => 'required',
            'password' => 'required',
            ]);
        $cek_user = User::where('email', $request['email'])->first();
        if (is_null($cek_user)) {
          $data['name'] 		 = $request->name;
          $data['email']    	 = $request->email;
          # $data['departemen_id']      = $request->departemen;
          $data['password']  	 = bcrypt($request->password);
          User::insert($data);
        }else{
            return response()->json(['message' => 'Email Ini Telah Terdaftar!! ', 'code' => 'Error'], 403);
        }
    }

    public function read()
    {
      #$data = Departemen::orderBy('id', 'DESC')->get();
      $data = User::all();
      return view('usr.read')->with(['data'=>$data]);
    }
    public function showedit($id)
    {
      $dep = Departemen::all();
      $data = User::where('id', $id)->first();
      return view('usr.showedit', compact('dep','data'));      
    }

    // Simpan data Edit
    public function editstore(Request $request, $id)
    {
      	$skr =  Carbon::now();
        $validator = Validator::make($request->all(), [
	          'user_name'	 => 'required',
            'email'	 => 'required',
            'departemen	' => 'required',
            'password'	 => 'required',
         ]);
         $data= User::where('id','=','5')->take(1)->first();
         $dp = Departemen::where('id', $request->departemen)->take(1)->first();
         #$data->update(['name' => $request->name,'email' => $request->email,'departemen_id' => $request->departemen,'password'=> $request->password]);
         #$data = User::where('id', $id)->first();
         $data->name = $request->user_name;
         $data->email         = $request->email;
         $data->departemen_id = $dp->id;
         $data->password      = bcrypt($request->password);
	       $data->save();


    }

    public function destroy(Request $request){
      $id=$request['id'];
      User::where('id', $id)->delete();
      return response()->json([
      'success' => 'Record deleted successfully!'
      ]);
  
  }    


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Departemen;
use Validator;

class DasboardController extends Controller
{
    public function index()
      {
        return view('das.index');
      }
     protected function registrasi()
      {
        return view('regis.create');
      }
     public function saveregis(Request $request)
      {
        $validator = Validator::make($request->all(), [
        'nama'          => 'required',
        'email'         => 'required',
	      'password'      => 'required',
      	]);
        User::create([
            'name'          => $request->nama,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
        ]);
      return redirect()->to('/login');
     }

  
}

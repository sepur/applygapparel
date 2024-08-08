<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function show()
      {
        return view('login.login');
      }
    public function perform(request $request)
      {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dasboard');
        }
        return redirect('/');  
      }

    public function logout(request $request)
      {
        Auth::logout();
        return redirect('/');
      }
    protected function authenticated(Request $request, $user)
      {
        return redirect()->intended();
    }

}


<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $this -> auth($request);
    }

    public function destroy()
    {
        dd('login');
    }

    public function auth(Request $request){ 
 
        $request->validate([ 
            'email' => 'required', 
            'password' => 'required'
        ]); 
 
        if(Auth::attempt($request->only('login', 'password'))){ 
            return redirect() -> route('home.index'); 
        } 
 
        return redirect() -> route('login.index') -> withInput() -> withErrors([ 
            'email' => 'email incorreto' 
        ]); 
 
    } 
}

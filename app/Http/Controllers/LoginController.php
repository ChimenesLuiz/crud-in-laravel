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
    public User $user;
    
    public function __construct()
    {
        $this -> user = new User();

    }

    public function index()
    {
        return view('login.index');
    }

    public function create()

    {
        return view('login.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request -> validate([ 'name' => 'required',
                                            'email' => ['unique:users,email, required'],
                                            'password' => 'required'],
                                        ['name.required' => 'O campo nome e obrigatorio',
                                        'email.required' => 'O campo nome e obrigatorio',
                                        'password.required' => 'O campo nome e obrigatorio',
                                        'email.unique' => 'Este email ja esta cadastrado em nosso sistema']);

        $validated['password'] = Hash::make($validated['password']);

        $this -> user -> create(['name' => $validated['name'],
                                'email' => $validated['email'],
                                'password' => $validated['password']]); 

        return redirect() -> route('login.index') -> with('message', 'Cadastrado com Sucesso');
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

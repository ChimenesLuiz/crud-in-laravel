<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;

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
    



    public function auth($request){ 
 
        $request->validate([ 
            'email' => 'required', 
            'password' => 'required'
        ],
        ['email.required' => 'Digite um email', 
        'password.required' => 'Digite um senha']); 
        $credentials = $request -> only('email', 'password');
        $authenticated = Auth::attempt($credentials);
        dd($authenticated);

        if ($authenticated)
        {
            return redirect('login.index') -> withErrors('error', 'email ou senha invalidos');
        }
        return redirect() -> route('home.index');


        return redirect() -> route('login.index') -> withInput() -> withErrors([ 
            'email' => 'email incorreto' 
        ]); 
 
    } 
    public function login(Request $request)
    {
        $this -> auth($request);
    }
}

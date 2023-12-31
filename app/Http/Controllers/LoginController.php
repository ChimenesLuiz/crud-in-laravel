<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
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
                                            'email' => 'required|email:filter,rfc,dns',
                                            'password' => ['required', 'string', 'min:6']],
                                        ['name.required' => 'O campo nome e obrigatorio',
                                        'email.required' => 'O campo nome e obrigatorio',
                                        'password.required' => 'O campo nome e obrigatorio',
                                        'email.unique' => 'Este email ja esta cadastrado em nosso sistema']);

        $validated['password'] = Hash::make($validated['password']);

        $this -> user -> create(['name' => $validated['name'],
                                'email' => $validated['email'],
                                'password' => $validated['password']]); 

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()-> route('dash.index');
        }
    
        return back()->withErrors(['error' => 'Credenciais inválidas']);
        
    }



    public function login(Request $request)
    { 
        $request->validate([ 
            'email' => 'required', 
            'password' => 'required'
        ],
        [
            'email.required' => 'Digite um email', 
            'password.required' => 'Digite uma senha'
        ]); 
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()-> route('dash.index');
        }
    
        return back()->withErrors(['error' => 'Credenciais inválidas']);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect() -> route('login.index');
    }
}

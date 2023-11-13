<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;



class ProfileController extends Controller
{
    public Profile $profile;
    
    public function __construct()
    {
        $this -> profile = new Profile();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = $this -> profile -> all();

        return view('profile.index') -> with('profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileRequest $request)
    {
        $request -> validated();
        $this -> profile -> create($request -> except(['_token', 'btn_submit'])); 

        return redirect() -> route('profile.index') -> with('message', 'Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this -> profile -> findOrFail($id);
        return view('profile.edit') -> with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, string $id)
    {
        $request -> validated();
        $object = $this -> profile::find($id);

        $object -> nome = $request -> nome;
        $object -> sobrenome = $request -> sobrenome;
        $object -> usuario = $request -> usuario;
        $object -> senha = $request -> senha;
        $object -> email = $request -> email;
        $object -> cep = $request -> cep;
        $object -> endereco = $request -> endereco;
        $object -> cidade = $request -> cidade;
        $object -> estado = $request -> estado;

        $object -> save();
        return redirect() -> route('profile.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this -> profile -> destroy($id);
        return redirect() -> route('profile.index') -> with('message', 'Excluido com Sucesso');
    }
}


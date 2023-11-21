<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;
use LDAP\Result;

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
        
        $data = $this -> profile -> all();

        return view('profile.index') -> with('data', $data);
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
        $data = $request -> validated();
        // dd($data);
        (isset($data['usuario'])) ? ($data['usuario'] = ($data['usuario'] === 'on') ? 1 : 0) : 0;
        (isset($data['cliente'])) ? ($data['cliente'] = ($data['cliente'] === 'on') ? 1 : 0) : 0;
        (isset($data['perfil'])) ? ($data['perfil'] = ($data['perfil'] === 'on') ? 1 : 0) : 0;
        (isset($data['produto'])) ? ($data['produto'] = ($data['produto'] === 'on') ? 1 : 0) : 0;
        (isset($data['venda'])) ? ($data['venda'] = ($data['venda'] === 'on') ? 1 : 0) : 0;

        $this -> profile -> create($data); 

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

        $object -> name = $request -> name;
        $object -> usuario = ($request -> usuario == null) ? 0 : 1;
        $object -> perfil = ($request -> perfil == null) ? 0 : 1;
        $object -> produto = ($request -> produtoo == null) ? 0 : 1;
        $object -> venda = ($request -> venda == null) ? 0 : 1;

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


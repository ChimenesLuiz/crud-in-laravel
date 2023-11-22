<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public Client $client;

    
    public function __construct()
    {
        $this -> client = new Client();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::table('profiles')
        // -> select('users.id', 'users.name AS username', 'profiles.name AS profile_name', 'users.email', 'users.cidade')
        // -> join('users', 'users.id_profile', '=', 'profiles.id')
        // -> get();
        $data = $this -> client -> all();


        return view('client.index') -> with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = $this -> client -> all();
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $validated = $request -> validated();


        $validated['cpf'] = str_replace(array('.','-','/'), "", $validated['cpf']);
        $validated['phone'] = str_replace(array('(', ')', '-','/'), "", $validated['phone']);
        isset($validated['phone2']) ? ($validated['phone2'] = str_replace(array('(', ')', '-','/'), "", $validated['phone2'])) : null;
        $validated['cep'] = str_replace(array('.','-','/'), "", $validated['cep']);
        
        $date = \DateTime::createFromFormat('d/m/Y', $validated['nascimento']);
        $date->format('Y-m-d');
        $validated['nascimento'] = $date;
        
        $this -> client -> create($validated); 

        return redirect() -> route('client.index') -> with('message', 'Cadastrado com Sucesso');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this -> client -> findOrFail($id);
        return view('client.edit') -> with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request -> validated();
        $object = $this -> client::find($id);

        $object -> name = $request -> name;
        $object -> last_name = $request -> last_name;
        $object -> email = $request -> email;
        $object -> phone = $request -> phone;
        $object -> phone2 = $request -> phone2;
        $object -> cpf = $request -> cpf;
        $object -> sexo = $request -> sexo;
        $object -> cep = $request -> cep;
        $object -> endereco = $request -> endereco;
        $object -> cidade = $request -> cidade;
        $object -> estado = $request -> estado;

        $object -> save();
        return redirect() -> route('client.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this -> client -> destroy($id);
        return redirect() -> route('client.index') -> with('message', 'Excluido com Sucesso');
    }

}

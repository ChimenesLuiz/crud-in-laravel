<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;


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
        // dd($request);
        $validated = $request -> validated();

        $validated['cpf'] = str_replace(array('.','-','/'), "", $validated['cpf']);
        $validated['phone'] = str_replace(array('(', ')', '-','/'), "", $validated['phone']);
        isset($validated['phone2']) ? ($validated['phone2'] = str_replace(array('(', ')', '-','/'), "", $validated['phone2'])) : null;
        $validated['cep'] = str_replace(array('.','-','/'), "", $validated['cep']);
        
        $date = \DateTime::createFromFormat('d/m/Y', $validated['nascimento']);
        $date->format('Y-m-d');
        $validated['nascimento'] = $date;
        
        // dd($validated);
        $this -> client -> create($validated); 

        return redirect() -> route('client.index') -> with('message', 'Cadastrado com Sucesso');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this -> client -> findOrFail($id);

        $date = Carbon::createFromFormat('Y-m-d H:i:s', $data->nascimento);

        $formattedDate = $date->format('d/m/Y');

        $data->nascimento = $formattedDate;

        return view('client.edit') -> with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, string $id)
    {
        $validated = $request -> validated();
        // dd($validated);
        $validated['cpf'] = str_replace(array('.','-','/'), "", $validated['cpf']);
        $validated['phone'] = str_replace(array('(', ')', '-','/'), "", $validated['phone']);
        isset($validated['phone2']) ? ($validated['phone2'] = str_replace(array('(', ')', '-','/'), "", $validated['phone2'])) : null;
        $validated['cep'] = str_replace(array('.','-','/'), "", $validated['cep']);
        
        $date = \DateTime::createFromFormat('d/m/Y', $validated['nascimento']);
        $date->format('Y-m-d');
        $validated['nascimento'] = $date;


        $object = $this -> client::find($id);

        $object -> name = $validated['name'];
        $object -> last_name = $validated['last_name'];
        $object -> email = $validated['email'];
        $object -> phone = $validated['phone'];
        $object -> phone2 = $validated['phone2'];
        $object -> cpf = $validated['cpf'];
        $object -> nascimento = $validated['nascimento'];
        $object -> sexo = $validated['sexo'];
        $object -> cep = $validated['cep'];
        $object -> endereco = $validated['endereco'];
        $object -> estado = $validated['estado'];
        $object -> cidade = $validated['cidade'];


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

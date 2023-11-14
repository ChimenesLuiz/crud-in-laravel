<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public User $user;
    public Profile $profile;
    
    public function __construct()
    {
        $this -> user = new User();
        $this -> profile = new Profile();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('profiles')
        -> select('users.id', 'users.name AS username', 'profiles.name AS profile_name', 'users.email', 'users.cidade')
        -> join('users', 'users.id_profile', '=', 'profiles.id')
        -> get();

        return view('user.index') -> with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this -> profile -> all();
        return view('user.create') -> with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $request -> password = Hash::make($request -> password);

        $this -> user -> create($request -> except(['_token', 'btn_submit'])); 

        return redirect() -> route('user.index') -> with('message', 'Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this -> user -> findOrFail($id);
        return view('user.edit') -> with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $request -> validated();
        $object = $this -> user::find($id);

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
        return redirect() -> route('user.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this -> user -> destroy($id);
        return redirect() -> route('user.index') -> with('message', 'Excluido com Sucesso');
    }

}

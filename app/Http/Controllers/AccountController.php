<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public User $user;
    public Profile $profile;
    
    public function __construct()
    {
        $this -> user = new User();
        $this -> profile = new Profile();
    }

    public function edit(string $id)

    {
        $account = $this -> user -> findOrFail($id);
        return view('account.edit') -> with('account', $account);
    }

    public function password(string $id)

    {
        $account = $this -> user -> findOrFail($id);
        return view('account.password') -> with('account', $account);
    }

    public function passwordUpdate(Request $request, string $id)
    {
        $request -> validate(['']);
        $object = $this -> user::find($id);

        
        $object -> password = Hash::make($request -> password);


        $object -> save();
        return redirect() -> route('dash.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        // dd($request);
        $request -> validated();
        $object = $this -> user::find($id);

        if ($request->hasFile('avatar')) {
            // Obter o arquivo da requisição
            $avatarFile = $request->file('avatar');
            // Gerar um nome único para o arquivo usando o timestamp
            $avatarName = time().'.'.$avatarFile->getClientOriginalExtension();
        
            // Mover o arquivo para o diretório 'avatars'
            $avatarFile->move(public_path('avatars'), $avatarName);
            // Atualizar o avatar do usuário no banco de dados
            Auth()->user()->update(['avatar' => $avatarName]);
        }

        $object -> name = $request -> name;
        $object -> last_name = $request -> last_name;
        $object -> email = $request -> email;
        $object -> cep = $request -> cep;
        $object -> endereco = $request -> endereco;
        $object -> cidade = $request -> cidade;
        $object -> estado = $request -> estado;

        $object -> save();
        return redirect() -> route('user.index') -> with('message', 'Editado com Sucesso!'); 
    }


}

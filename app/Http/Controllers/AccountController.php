<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Profile;
use App\Rules\MatchOldPassword;
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
        $validated = $request -> validate(['current_password' => ['required', 'current_password'],
        'password' => ['min:6', 'required', 'confirmed'],
        'password_confirmation' => ['min:6', 'required']
                                        ],
                                        ['current_password.required' => 'Digite uma Senha antiga',
                                        'current_password.current_password' => 'Sua senha antiga nao esta correta',
                                        'password.min' => 'A senha deve ter no minimo :min caracteres',
                                        'password.required' => 'Digite uma Senha antiga',
                                        'password.confirmed' => 'As senhas nao coincidem',
                                        'password_confirmation.min' => 'A senha deve ter no minimo :min caracteres',
                                        'password_confirmation.required' => 'Confirme a sua nova senha'
                                        
                                        
                                    ]);
        $object = $this -> user::find($id);

        $object -> password = Hash::make($validated['password']);

        $object -> save();

        auth()->login($object);

        return redirect() -> route('dash.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        // $request -> validated();
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

        $object -> save();
        return redirect() -> route('dash.index') -> with('message', 'Editado com Sucesso!'); 
    }


}

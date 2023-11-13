<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public User $user;
    
    public function __construct()
    {
        $this -> user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = $this -> user -> all();

        return view('user.index') -> with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request -> validated();
        // dd($request -> except(['_token']));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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

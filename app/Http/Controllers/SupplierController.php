<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Profile;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupplierController extends Controller
{
    public Supplier $supplier;
    public Profile $profile;
    
    public function __construct()
    {
        $this -> supplier = new Supplier();
        $this -> profile = new Profile();
    }

    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this -> supplier -> create($request -> except(['_token', 'btn_submit'])); 

        return redirect() -> route('product.index') -> with('message', 'Cadastrado com Sucesso');
    }

    public function storeModal(UserRequest $request)
    {

        $this -> supplier -> create($request -> except(['_token', 'btn_submit'])); 

        return redirect() -> route('product.create') -> with('message', 'Cadastrado com Sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier_data = $this -> supplier -> findOrFail($id);
        return view('supplier.edit') -> with('supplier_data', $supplier_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $object = $this -> supplier::find($id);

        $object -> name = $request -> name;
        $object -> cnpj = $request -> cnpj;

        $object -> save();
        return redirect() -> route('product.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this -> supplier -> destroy($id);
        return redirect() -> route('product.index') -> with('message', 'Excluido com Sucesso');
    }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Profile;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use LaravelLegends\PtBrValidator\Rules\FormatoCnpj;

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
        $validated = $request -> validate(['name' => ['required'],
                                            'cnpj' => ['required', new FormatoCnpj]]);

        $validated['cnpj'] = str_replace(array('.','-','/'), "", $validated['cnpj']);

        $this -> supplier -> create($validated); 

        return redirect() -> route('product.index') -> with('message', 'Cadastrado com Sucesso');
    }

    public function storeModal(Request $request)
    {
        $validated = $request -> validate(['name' => ['required'],
                                            'cnpj' => ['required', new FormatoCnpj]],
                                        ['name.required' => 'Preencha o campo nome',
                                        'cnpj.required' => 'Preencha o campo CNPJ',
                                    ]);
        $validated['cnpj'] = str_replace(array('.','-','/'), "", $validated['cnpj']);

        $this -> supplier -> create($validated); 

        return redirect() -> route('product.create') -> with('message', 'Cadastrado com Sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = $this -> supplier -> findOrFail($id);
        return view('supplier.edit') -> with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request -> validate(['name' => ['required'],
        'cnpj' => ['required', new FormatoCnpj]]);
        $validated['cnpj'] = str_replace(array('.','-','/'), "", $validated['cnpj']);
        $object = $this -> supplier::find($id);

        $object -> name = $validated['name'];
        $object -> cnpj = $validated['cnpj'];

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

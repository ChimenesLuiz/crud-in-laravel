<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // public User $user;
    // public Profile $profile;
    public Product $product;
    public Supplier $supplier;
    
    public function __construct()
    {
        // $this -> user = new User();
        // $this -> profile = new Profile();
        $this -> product = new Product();
        $this -> supplier = new Supplier();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::table('suppliers')
        // -> select('products.id AS product_id',
        //         'products.name AS product_name',
        //         'products.value',
        //         'products.amount',
        //         'suppliers.id AS supplier_id',
        //         'suppliers.name AS supplier_name',
        //         'suppliers.cnpj AS supplier_cnpj',)
        // -> join('products', 'products.id_supplier', '=', 'suppliers.id')
        // -> get();
        $data = DB::table('suppliers')
        ->select(
            'products.id AS product_id',
            'products.name AS product_name',
            'products.value',
            'products.amount',
            'suppliers.id AS supplier_id',
            'suppliers.name AS supplier_name',
            'suppliers.cnpj AS supplier_cnpj'
        )
        ->leftJoin('products', 'products.id_supplier', '=', 'suppliers.id')
        ->get();
        // dd($data);

        
        return view('product.index') -> with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = $this -> supplier -> all();

        return view('product.create') -> with('supplier', $supplier);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // dd($request);
        $this -> product -> create($request -> except(['_token', 'btn_submit'])); 

        return redirect() -> route('product.index') -> with('message', 'Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier_data = $this -> supplier -> all();
        $product_data = $this -> product -> findOrFail($id);
        return view('product.edit') -> with(['product_data' => $product_data,
                                            'supplier_data' => $supplier_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $request -> validated();
        $object = $this -> product::find($id);

        $object -> id_supplier = $request -> id_supplier;
        $object -> name = $request -> name;
        $object -> value = $request -> value;
        $object -> amount = $request -> amount;

        $object -> save();
        return redirect() -> route('product.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this -> product -> destroy($id);
        return redirect() -> route('product.index') -> with('message', 'Excluido com Sucesso');
    }

    public function storeModal(ProductRequest $request)
{
    $this -> supplier -> create($request -> except(['_token'])); 

    return redirect() -> route('product.create') -> with('message', 'Fornecedor criado com sucesso');
}
}

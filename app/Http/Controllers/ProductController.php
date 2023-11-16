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
        $data = DB::table('suppliers')
        -> select('products.id AS product_id',
                'products.name AS product_name',
                'products.value',
                'products.amount',
                'suppliers.name AS supplier_name')
        -> join('products', 'products.id_supplier', '=', 'suppliers.id')
        -> get();
        
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
        $product = $this -> product -> findOrFail($id);
        return view('product.edit') -> with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(productRequest $request, string $id)
    {
        $request -> validated();
        $object = $this -> product::find($id);

        $object -> name = $request -> name;
        $object -> last_name = $request -> last_name;
        $object -> email = $request -> email;
        $object -> cep = $request -> cep;
        $object -> endereco = $request -> endereco;
        $object -> cidade = $request -> cidade;
        $object -> estado = $request -> estado;

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

    public function storeModal(Request $request)
{

    $this -> supplier -> create($request -> except(['_token', 'btn_submit'])); 

    return redirect() -> route('product.create') -> with('message', 'Fornecedor criado com sucesso');
}
}

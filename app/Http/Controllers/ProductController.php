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

        $supplier = $this -> supplier -> all();
        // $product = $this -> supplier -> all();
        // dd($supplier);

        
        return view('product.index') -> with(['supplier' => $supplier, 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = $this -> supplier -> all();
        // dd($supplier);

        return view('product.create') -> with('supplier', $supplier);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validated = $request -> validated();
        $validated['value'] = str_replace(array('.',',','/'), "", $validated['value']);
        // dd($validated);
        $this -> product -> create($validated); 

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
        $supplier = $this -> supplier -> all();
        $product = $this -> product -> findOrFail($id);
        return view('product.edit') -> with(['product' => $product,
                                            'supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $validated = $request -> validated();


        $object = $this -> product::find($id);

        $validated['value'] = str_replace(array('.',',','/'), "", $validated['value']);

        $object -> id_supplier =  $validated['id_supplier'];
        $object -> name =  $validated['name'];
        $object -> value =  $validated['value'];
        $object -> amount =  $validated['amount'];

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
}


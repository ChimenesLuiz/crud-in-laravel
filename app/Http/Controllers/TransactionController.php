<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\Product;
use App\Models\Client;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public Product $product;
    public Client $client;
    public Transaction $transaction;
    
    public function __construct()
    {
        $this -> client = new Client();
        $this -> product = new Product();
        $this -> transaction = new Transaction();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('transactions')
        ->select('transactions.id AS id_transaction',
                'transactions.total AS transaction_total',
                'products.id AS id_product',
                'products.name AS product_name',
                'products.value AS product_value',
                'clients.id AS id_client',
                'clients.name AS client_name',
                'clients.phone AS client_phone',
                )
        ->join('products', 'transactions.id_product', '=', 'products.id')
        ->join('clients', 'transactions.id_client', '=', 'clients.id')
        ->get();

        return view('transaction.index')-> with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_data = $this -> product -> all();
        $client_data = $this -> client -> all();
        return view('transaction.create') -> with(['client_data' => $client_data,
                                                    'product_data' => $product_data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> transaction -> create($request -> except(['_token', 'btn_submit'])); 

        return redirect() -> route('transaction.index') -> with('message', 'Cadastrado com Sucesso');
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
        $inner_data = DB::table('transactions')
        ->select('transactions.id AS id_transaction',
        'transactions.amount AS amount',
        'transactions.total AS total',
        'products.id AS id_product',
        'products.name AS product_name',
        'clients.id AS id_client',
        'clients.name AS client_name'
        )
        ->join('products', 'transactions.id_product', '=', 'products.id')
        ->join('clients', 'transactions.id_client', '=', 'clients.id')
        ->where('transactions.id', '=', $id)
        ->get();
        $inner_data = $inner_data[0];


        $product_data = $this -> product -> all();
        $client_data = $this -> client -> all();

        return view('transaction.edit') -> with(['inner_data' => $inner_data,
                                                'product_data' => $product_data,
                                                'client_data' => $client_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $object = $this -> transaction::find($id);

        
        $object -> id_user =  $request -> id_user;
        $object -> id_client = $request -> id_client;
        $object -> id_product = $request -> id_product;
        $object -> amount = $request -> amount;
        $object -> total = $request -> total;
        // dd($object);
        $object -> save();
        return redirect() -> route('transaction.index') -> with('message', 'Editado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this -> transaction -> destroy($id);
        return redirect() -> route('transaction.index') -> with('message', 'Excluido com Sucesso');
    }

}

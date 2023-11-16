<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public User $user;
    // public Profile $profile;
    public Product $product;
    
    public function __construct()
    {
        // $this -> user = new User();
        // $this -> profile = new Profile();
        $this -> product = new Product();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::table('profiles')
        // -> select('users.id', 'users.name AS username', 'profiles.name AS profile_name', 'users.email', 'users.cidade')
        // -> join('users', 'users.id_profile', '=', 'profiles.id')
        // -> get();

        $product = $this -> product -> all();

        return view('product.index') -> with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = $this -> product -> all();
        return view('product.create') -> with('product', $product);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
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
    dd($request);
    // Validação dos dados (substitua pelos campos reais do seu formulário)

    // Lógica para salvar os dados no banco de dados
    // Substitua isso com a lógica real do seu aplicativo
    // Exemplo: Modelo::create($request->all());

    return response()->json(['mensagem' => 'Dados salvos com sucesso!']);
}
}

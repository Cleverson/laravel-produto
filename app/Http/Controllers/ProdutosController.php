<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Produto;
use App\Categoria;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller {

    public function index()
    {
        //Lista todos os produtos
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
      //$categorias = Categoria::get();
      //return view ('produtos.create',['categorias' => $categorias]);
      $categorias = Categoria::get();
      return View('produtos.create',['categorias'=>$categorias]);
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        dd($input);
        Produto::create($input);
        return redirect('produtos');
    }

    public function destroy($id)
    {
        Produto::find($id)->delete();
        return view('produtos');
    }

    public function edit($id)
    {
        Produto::find($id);
        return view('produtos.edit', compact('produtos'));
    }
}

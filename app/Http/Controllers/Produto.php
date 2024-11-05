<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProdutoModel;
class Produto extends Controller
{
    public function create(){
        return view('Produto.create'); 
    }

    public function store(Request $request){

        $status = ProdutoModel::salvar($request);

        if ($status){
            return redirect()->back()->with('mensagem', 'Produto cadastrado com sucesso');
        } else{
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar o produto. Tente novamente.');
        }
    }

    public function index()
    {
        $produtos = ProdutoModel::listar();
        return view('Produto.index', compact('produtos'));
    }

    public function destroy($id)
    {
        $status = ProdutoModel::deletar($id);

        if ($status) {
            return redirect('listarProduto')->with('mensagem', 'Produto deletado com sucesso!');
        } else {
            return redirect('listarProduto')->with('mensagem', 'Produto não encontrado.');
        }
    }

    public function edit($id)
    {
        $produto = ProdutoModel::consultar($id);                          
        return view('Produto.edit', compact('produto'));                                                        
    }

    public function update(Request $request, $id)
    {
        $status = ProdutoModel::atualizar($request, $id);
        
        if ($status) {
            return redirect('listarProduto')->with('mensagem', 'Produto atualizado com sucesso!');
        } else {
            return redirect('listarProduto')->with('mensagem', 'Produto não encontrado.');
        }
    }

    public function show($id){
        $produto = ProdutoModel::consultar($id);
        return view('Produto.show', compact('produto'));
    }

}

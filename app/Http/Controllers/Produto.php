<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Produto extends Controller
{
    public function create(){
        return view('Produto.create');
    }

    public function store(Request $request){
        
        $status = DB::table('produtos')->insert([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'medida' => $request->input('medida'),
            'quantidade' => $request->input('quantidade'),
            'preco' => $request->input('preco')
        ]);
    

        if ($status){
            return redirect()->back()->with('mensagem', 'Produto cadastrado com sucesso');
        } else{
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar o produto. Tente novamente.');
        }
    }
}

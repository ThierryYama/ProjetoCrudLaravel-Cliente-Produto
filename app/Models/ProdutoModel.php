<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoModel extends Model
{
    use HasFactory;

    public static function salvar(Request $request)
    {
        $status = DB::table('produtos')->insert([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'medida' => $request->input('medida'),
            'quantidade' => $request->input('quantidade'),
            'preco' => $request->input('preco')
        ]);
        return $status;
    }

    public static function listar()
    {
        $produtos = DB::table('produtos')->get();
        return $produtos;
    }

    public static function deletar($id)
    {
        $status = DB::table('produtos')->delete($id);
        return $status;
    }

    public static function consultar($id)
    {
        $produto = DB::table('produtos')->where('id', $id)->first(); 
        return $produto;
    }

    public static function atualizar(Request $request, $id)
    {
        $status = DB::table('produtos')->where('id', $id)->update([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),            
            'medida' => $request->input('medida'),  
            'quantidade' => $request->input('quantidade'),
            'preco' => $request->input('preco')
        ]);
        return $status;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAtividade extends Controller
{
    
    public function main(){
        return view('welcome');
    }

    public function atividade1(){
        $numeros = array(3, 6, 9, 12);
        $novos_numeros = array();
        $terceiro = 0;

        return view('atividade1', compact('numeros', 'novos_numeros', 'terceiro'));
    }

    public function atividade2(){
        $numero = -10;

        return view('atividade2', compact('numero'));
    }

    public function atividade3(){
        $c = 1;
        $n = 90;
        $n_temporaria = 0;
        $salario = 0;
        $e = 0;
        $soma = 0;

        return view('atividade3', compact('c', 'n', 'n_temporaria', 'salario', 'e', 'soma'));
    }

    public function atividade4(){
        $indicePoluicao = 0.2;
        $grupo1 = "coca-cola";
        $grupo2 = "fanta";
        $grupo3 = "guarana";

        return view('atividade4', compact('indicePoluicao', 'grupo1', 'grupo2', 'grupo3'));
    }

    public function atividade5(){
        $idade = 15;

        return view('atividade5', compact('idade'));
    }

    public function atividade6(){
        $i = 100;
        $total = 0;

        return view('atividade6', compact('i', 'total'));
    }

    public function atividade7(){
        
        $numeros = array();
        $valor_maior = 0;
        $valor_menor = 0;
        $totalElementos = 0;
        $somaElementos = 0;
        $valor_medio = 0;

        return view('atividade7', compact('numeros', 'valor_maior', 'valor_menor','totalElementos','somaElementos','valor_medio'));
    }

    public function atividade8(){
        $primeiroTexto = "Bom dia";
        $segundoTexto = "Professora";

        return view('atividade8', compact('primeiroTexto', 'segundoTexto'));
    }

    public function atividade9(){
        $nomes = array("Joao", "Maria", "Thierry", "Nicholas", "André");
        return view('atividade9', compact('nomes'));
    }

    public function atividade10(){
        $numeros = array();
        $somaNumeros = 0;
        return view('atividade10', compact('numeros','somaNumeros'));
    }

    public function atividade11(){
        $meuNome = "Thierry";
        return view('atividade11', compact('meuNome'));
    }
}

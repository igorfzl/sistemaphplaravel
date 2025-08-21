<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function dataHora()
    {
        $dataHora = now()->format('d/m/Y H:i:s');
        return view('data-hora', compact('dataHora'));
    }

    public function usuario($id)
    {
        $usuarios = [
            1 => 'João',
            2 => 'Maria',
            3 => 'Pedro'
        ];

        $nome = $usuarios[$id] ?? 'Usuário não encontrado';
        return view('usuario', compact('nome'));
    }

    public function produtos()
    {
        $produtos = ["Notbook", "Mouse", "Teclado", "Monitor"];
        return view('produtos', compact('produtos'));
    }

    public function soma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return view('resultado', compact('resultado'));
    }


    public function mensagem()
    {
        $mensagem = "Exemplo Laravel";
        return view('mensagem', compact('mensagem'));
    }


    public function mostraNome($nome)
    {
        return view('nome', compact('nome'));
    }


    public function formulario()
    {
        return view('fomulario');
    }


    public function receberDados(request $request)
    {
        $nome = $request->input('nome');
        return view('resultado', compact('nome'));
    }


}

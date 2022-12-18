<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dados['ativo'] = 'home';
        return view('home', $dados);
    }

    public function sobre()
    {
        $dados['ativo'] = 'sobre';
        return view('sobre', $dados);
    }

    public function contato()
    {
        $dados['ativo'] = 'contato';
        return view('contato', $dados);
    }
}

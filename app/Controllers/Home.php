<?php

namespace App\Controllers;

class Home extends BaseController
{
        public function index()
    {
        // Funtion cadastro, atualizar e excluir comentario
        helper('url');
        return view('Home');
    }
}

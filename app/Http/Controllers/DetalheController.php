<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class DetalheController extends Controller
{
    public function index()
    {
        return view('academia\aluno\detalhe');
    }
}

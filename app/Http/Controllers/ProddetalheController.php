<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProddetalheController extends Controller
{
    public function index ()
    {
        return view ('menu/produto/detalhe');
    }
}

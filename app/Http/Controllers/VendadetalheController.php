<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class VendadetalheController extends Controller
{
    public function index()
    {
        return view ('menu/venda/detalhe/index');
    }
}

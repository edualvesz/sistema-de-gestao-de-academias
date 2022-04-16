<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index (){
        return view('menu\mensalidade\servico\index');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class AddservicoController extends Controller
{
    public function index (){
        return view('menu\mensalidade\servico\adicionar\index');
    }
}

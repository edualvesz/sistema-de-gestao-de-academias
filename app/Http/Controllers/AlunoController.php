<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('academia\aluno\index');
    }
}



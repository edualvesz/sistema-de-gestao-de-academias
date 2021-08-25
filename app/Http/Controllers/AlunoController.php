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

    /*public function index()
    {
        $user = new User();
        $user->name = 'Eduardo Alves';
        $user->email = 'eduardo_ean@outlook.com';
        $user->password = Hash::make('123');
        $user->save();

        echo "<h1>Listagem de usuário</h1>";
    }*/
}



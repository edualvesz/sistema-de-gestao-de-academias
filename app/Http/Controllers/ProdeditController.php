<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProdeditController extends Controller
{
    public function index ()
    {
        return view ('menu/produto/edit');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index ()
    {
        return view ('menu/financeiro/index');
    }
}

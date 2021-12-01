<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class VendaeditController extends Controller
{
    public function index ()
    {
        return view ('menu/venda/edit');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    // solo puedo entrar aqui si estoy logeado (TODO: solo entrar si es admin)
    public function __construct()
    {
        $this->middleware('auth');    
    }

    public function index()
    {
        return view('admin.index');
    }

    public function charts()
    {
        return view('admin.charts.charts');
    }

  
}

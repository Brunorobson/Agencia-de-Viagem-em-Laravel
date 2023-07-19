<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = 'Home Page';
        return view('layouts.master', compact('page'));
    }
}

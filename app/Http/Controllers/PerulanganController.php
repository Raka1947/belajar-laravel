<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerulanganController extends Controller
{
    public function index()
    {
        return view('perulangan');
    }
}

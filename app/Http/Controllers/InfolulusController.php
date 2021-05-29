<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfolulusController extends Controller
{
    public function index()
    {
        return view('layouts.login');
    }
}

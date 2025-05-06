<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard2Controller extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data dari model atau apa pun
        return view('dashboard2.index');
    }
}

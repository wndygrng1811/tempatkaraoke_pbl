<?php

namespace App\Http\Controllers;

use App\Models\Room; // Model untuk Ruangan
use Illuminate\Http\Request;

class Dashboard2Controller extends Controller
{
    public function index()
    {
        // Ambil semua data ruangan
        $rooms = Room::all();

        // Kirim data ruangan ke view
        return view('rooms.index', compact('rooms'));
    }
}

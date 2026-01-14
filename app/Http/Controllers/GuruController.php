<?php

namespace App\Http\Controllers;

use App\Models\Guru; // Pastikan Anda sudah punya Model Guru
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuruController extends Controller
{
    public function index()
    {
        // Mengambil semua data guru
        $guru = Guru::all(); 

        return Inertia::render('Guru/Index', [
            'guru' => $guru
        ]);
    }

    // Tambahkan method lain (create, store, edit, dll) sesuai kebutuhan CRUD
}
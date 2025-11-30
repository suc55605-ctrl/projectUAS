<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Lowongan;

class LandingController extends Controller
{
    // Landing page 
    public function index()
    {
        $beritas = Berita::latest()->take(3)->get();
        $lowongans = Lowongan::latest()->take(3)->get();

        return view('landing', compact('beritas', 'lowongans'));
    }

    // Semua berita dengan pagination
    public function beritaSemua()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('berita.index', compact('beritas'));
    }
    

    // Detail berita
    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.detail', compact('berita'));
    }

    // Semua lowongan dengan pagination
    public function lowonganSemua()
    {
        $lowongans = Lowongan::latest()->paginate(5);
        return view('lowongan.index', compact('lowongans'));
    }

    // Detail lowongan
    public function lowonganDetail($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('lowongan.detail', compact('lowongan'));
    }
}

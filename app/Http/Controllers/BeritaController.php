<?php

namespace App\Http\Controllers;

use App\Models\Berita; 
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua berita di halaman admin
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $fileName = null;
        if($request->hasFile('gambar')){
            $fileName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('berita'), $fileName);
        }

        Berita::create([
            'judul' => $request->judul,
            'isi'   => $request->isi,
            'gambar'=> $fileName,
        ]);

        return redirect('/admin/berita')->with('success','Data berita berhasil ditambahkan!');
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    // Update berita
   public function update(Request $request, $id)
{
    $berita = Berita::findOrFail($id);

    $fileName = $berita->gambar;

    if($request->hasFile('gambar')){
        $fileName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('berita'), $fileName);
    }

    $berita->update([
        'judul' => $request->judul,
        'isi'   => $request->isi,
        'gambar'=> $fileName,
    ]);

    return redirect('/admin/berita')->with('success','Berita berhasil diperbarui!');
}

    // Hapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect('/admin/berita')->with('success','Berita berhasil dihapus!');
    }

    // Menampilkan berita untuk halaman publik
    public function indexPublic()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('berita.index', compact('beritas'));
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.show', compact('berita'));
    }
}

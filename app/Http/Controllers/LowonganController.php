<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    // INDEX
    public function index() {
        $lowongans = Lowongan::latest()->get();
        return view('admin.lowongan.index', compact('lowongans'));
    }

    // CREATE FORM
    public function create() {
        return view('admin.lowongan.create');
    }

    // STORE
    public function store(Request $request) {
        $data = $request->validate([
            'posisi' => 'required',
            'perusahaan' => 'required',
            'batas_waktu' => 'required|date',
            'deskripsi' => 'required',
        ]);

        Lowongan::create($data);

        return redirect('/admin/lowongan')
            ->with('success', 'Lowongan berhasil ditambahkan');
    }
//edit
    public function edit($id) {
    $lowongan = Lowongan::findOrFail($id);
    return view('admin.lowongan.edit', compact('lowongan'));
}

    // UPDATE
    public function update(Request $request, $id) {
        $data = $request->validate([
            'posisi' => 'required',
            'perusahaan' => 'required',
            'batas_waktu' => 'required|date',
            'deskripsi' => 'required',
        ]);

        Lowongan::findOrFail($id)->update($data);

        return redirect('/admin/lowongan')
            ->with('success', 'Lowongan berhasil diperbarui');
    }

    // DELETE
    public function destroy($id) {
        Lowongan::destroy($id);

        return redirect('/admin/lowongan')
            ->with('success', 'Lowongan berhasil dihapus');
 
       }
public function show($id)
{
    $lowongan = Lowongan::findOrFail($id);

    return view('admin.lowongan.detail', compact('lowongan'));
}}

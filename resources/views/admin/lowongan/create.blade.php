@extends('layouts.admin')

@section('title', 'Tambah Lowongan')

@section('content')

<div class="card-admin">

    <h2>Tambah Lowongan</h2>

    <form action="{{ route('lowongan.store') }}" method="POST">
        @csrf

        <label>Posisi</label>
        <input type="text" name="posisi" class="form-control">

        <label>Perusahaan</label>
        <input type="text" name="perusahaan" class="form-control">

        <label>Batas Waktu</label>
        <input type="date" name="batas_waktu" class="form-control">

        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="5"></textarea>

        <button class="btn btn-primary mt-3">Simpan</button>
    </form>

</div>

@endsection

@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')

<div class="card-admin">

    <h2>Tambah Berita</h2>

    <form action="/admin/berita" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul</label>
        <input type="text" name="judul" class="form-control">

        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="5"></textarea>

        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">

        <button class="btn btn-primary mt-3">Simpan</button>
    </form>

</div>

@endsection

@extends('layouts.admin')

@section('title', 'Detail Berita')

@section('content')

<link rel="stylesheet" href="/css/admin-berita.css">

<div class="container-admin">

    <h2 class="judul-berita">{{ $berita->judul }}</h2>

    @if ($berita->gambar)
        <div class="gambar-wrap">
            <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="gambar-berita">
        </div>
    @endif

    <div class="isi-berita">
        <p>{{ $berita->isi }}</p>
    </div>

    <a href="/admin/berita" class="btn btn-secondary mt-3">← Kembali</a>

</div>

@endsection

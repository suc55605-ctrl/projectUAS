@extends('layouts.main')

@section('content')
<h1>{{ $berita->judul }}</h1>
<img src="{{ asset('berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="300">
<p>{{ $berita->isi }}</p>
<a href="{{ url('/admin/berita') }}">Kembali</a>
@endsection

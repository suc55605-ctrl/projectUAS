@extends('landing')

@section('content')

<div class="container py-4">

    <a href="/berita" class="btn btn-secondary mb-3">← Kembali</a>

    {{-- Judul Berita --}}
    <h2>{{ $berita->judul }}</h2>

    {{-- Tanggal --}}
    <p class="text-muted">{{ $berita->created_at->format('d M Y') }}</p>

    {{-- Gambar Berita --}}
    @if ($berita->gambar)
    <div class="mb-4">
        <img src="{{ asset('berita/'.$berita->gambar) }}" class="img-fluid rounded">
    </div>
    @endif

    {{-- Isi Berita --}}
    <div class="mt-3" style="line-height: 1.7;">
        {!! nl2br(e($berita->isi)) !!}
    </div>

</div>

@endsection

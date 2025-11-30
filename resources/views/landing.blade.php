@extends('layouts.main')

@section('title', 'Sistem Informasi Alumni')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<div class="hero">
    <div class="container hero-content">
        <h1 class="display-4 fw-bold">Sistem Informasi Alumni</h1>
        <p>Informasi alumni, berita kampus, dan peluang karier terkini.</p>


    </div>
</div>

<!--BERITA -->
<div class="container" id="section-berita">
    <h3 class="section-title">Berita Terbaru</h3>

    <div class="row">
        @forelse ($beritas as $b)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                
                <img src="{{ $b->gambar ? asset('berita/'.$b->gambar) : asset('img/berita-default.jpg') }}"
                     class="card-img-top"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">{{ $b->judul }}</h5>
                    <p class="card-text">{{ Str::limit($b->isi, 100) }}</p>
                    <a href="{{ route('berita.detail', $b->id) }}" class="btn btn-primary btn-sm">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        @empty
            <p class="text-muted">Belum ada berita.</p>
        @endforelse
    </div>

    <a href="{{ route('berita.public') }}" class="btn btn-primary mt-3">Lihat Semua Berita</a>
</div>

<!--LOWONGAN -->
<div class="container" id="section-lowongan">
    <h3 class="section-title">Lowongan Kerja</h3>

    <div class="list-group">
        @forelse ($lowongans as $l)
        <a href="{{ route('lowongan.detail', $l->id) }}" class="list-group-item list-group-item-action">
            <strong>{{ $l->posisi }}</strong> – {{ $l->perusahaan }}
            <br>
            <small>Batas waktu: {{ $l->batas_waktu }}</small>
        </a>
        @empty
            <p class="text-muted">Belum ada lowongan.</p>
        @endforelse
    </div>

    <a href="{{ route('lowongan.public') }}" class="btn btn-primary mt-3">Lihat Semua Lowongan</a>
</div>

@endsection

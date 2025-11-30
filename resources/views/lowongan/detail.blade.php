@extends('landing')

@section('content')

<div class="container py-4">

    <a href="/lowongan" class="btn btn-secondary mb-3">← Kembali</a>

    <h2>{{ $lowongan->posisi }}</h2>

    <p class="text-muted mb-2">
        <strong>Perusahaan:</strong> {{ $lowongan->perusahaan }}
    </p>

    <p class="text-muted mb-4">
        <strong>Batas Waktu:</strong> {{ $lowongan->batas_waktu }}
    </p>

    <div class="mb-4">
        <strong>Deskripsi Pekerjaan:</strong><br>
        {!! nl2br(e($lowongan->deskripsi)) !!}
    </div>

    @if ($lowongan->gambar)
    <div class="mt-3">
        <img src="{{ asset('storage/'.$lowongan->gambar) }}" class="img-fluid rounded">
    </div>
    @endif

</div>

@endsection

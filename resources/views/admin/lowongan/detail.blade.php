@extends('layouts.admin')

@section('title', 'Detail Lowongan')

@section('content')

<div class="detail-container">

    <h1 class="detail-title">{{ $lowongan->posisi }}</h1>

    <p class="detail-info"><strong>Perusahaan:</strong> {{ $lowongan->perusahaan }}</p>
    <p class="detail-info"><strong>Batas Waktu:</strong> {{ $lowongan->batas_waktu }}</p>

    <div class="detail-desc">
        {{ $lowongan->deskripsi }}
    </div>

    <a href="{{ route('lowongan.index') }}" class="btn-back">Kembali</a>

</div>

@endsection

@extends('layouts.main')

@section('title', 'Semua Lowongan')

@section('content')
<h2 class="mb-4">Semua Lowongan</h2>

@forelse ($lowongans as $l)
<div class="card mb-3 p-3">
    <h3 class="mb-1">{{ $l->posisi }}</h3>
    <p class="mb-1 text-muted">{{ $l->perusahaan }}</p>
    <p class="mb-2"><strong>Batas Waktu:</strong> {{ $l->batas_waktu }}</p>
    <a href="/lowongan/{{ $l->id }}" class="btn btn-primary btn-sm">Lihat Detail</a>
</div>
@empty
<p class="text-muted">Belum ada lowongan.</p>
@endforelse

<div class="mt-3">
    {{ $lowongans->links() }}
</div>
@endsection

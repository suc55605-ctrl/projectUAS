@extends('layouts.main')

@section('title', 'Semua Berita')

@section('content')
<h2 class="mb-4">Semua Berita</h2>

@forelse ($beritas as $b)
<div class="card mb-3 p-3">
    <h3>{{ $b->judul }}</h3>
    <p class="text-muted">{{ $b->created_at->format('d M Y') }}</p>
    <p>{{ Str::limit($b->isi, 200) }}</p>

    <a href="/berita/{{ $b->id }}" class="btn btn-primary btn-sm">Lihat Detail</a>
</div>
@empty
<p class="text-muted">Belum ada berita.</p>
@endforelse

<div class="mt-3">
    {{ $beritas->links() }}
</div>
@endsection

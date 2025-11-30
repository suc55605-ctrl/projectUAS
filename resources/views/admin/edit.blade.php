@extends('layouts.admin')

@section('title', 'Edit Lowongan')

@section('content')

<div class="edit-container">

    <h2>Edit Lowongan</h2>

    <form action="{{ route('lowongan.update', $lowongan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Posisi</label>
        <input type="text" name="posisi" value="{{ $lowongan->posisi }}" class="form-control">

        <label>Perusahaan</label>
        <input type="text" name="perusahaan" value="{{ $lowongan->perusahaan }}" class="form-control">

        <label>Batas Waktu</label>
        <input type="date" name="batas_waktu"
            value="{{ $lowongan->batas_waktu->format('Y-m-d') }}"
            class="form-control">

        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="5">{{ $lowongan->deskripsi }}</textarea>

        <button class="mt-3">Update</button>
    </form>

</div>

@endsection

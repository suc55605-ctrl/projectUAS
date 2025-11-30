<link rel="stylesheet" href="/css/admin.css">
<h2>Edit Berita</h2>

<a href="{{ route('berita.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Judul</label>
    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}">

    <label class="mt-3">Isi</label>
    <textarea name="isi" class="form-control" rows="5">{{ $berita->isi }}</textarea>

    <label class="mt-3">Gambar</label>
    <input type="file" name="gambar" class="form-control">

    @if($berita->gambar)
        <p class="mt-2">Gambar Saat Ini:</p>
        <img src="/berita/{{ $berita->gambar }}" width="150" class="rounded">
    @endif

    <button class="btn btn-primary mt-3">Update</button>
</form>

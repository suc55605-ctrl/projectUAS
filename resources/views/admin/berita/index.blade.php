<link rel="stylesheet" href="/css/admin.css">
<h2>Data Berita</h2>
<a href="{{ route('berita.create') }}" class="btn btn-primary">+ Tambah Berita</a>

<table class="table mt-3">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    @foreach($beritas as $b)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->judul }}</td>
        <td>
            @if($b->gambar)
            <img src="/berita/{{ $b->gambar }}" width="80">
            @endif
        </td>
        <td>
            <!-- BUTTON EDIT (Laravel route) -->
           <div class="btn-yellow"><a href="{{ route('berita.edit', $b->id) }}" class="btn btn-warning">Edit</a></div> 

            <!-- BUTTON DELETE (form DELETE) -->
            <form action="{{ route('berita.destroy', $b->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Yakin hapus?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<h2>Semua Berita</h2>

@foreach ($beritas as $b)
<div class="card mb-3 p-3">
    <h3>{{ $b->judul }}</h3>
    <p>{{ Str::limit($b->isi, 150) }}</p>
    <a href="{{ route('berita.show', $b->id) }}">Baca Selengkapnya</a>
</div>
@endforeach

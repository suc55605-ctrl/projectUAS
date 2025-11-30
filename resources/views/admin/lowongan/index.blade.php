<link rel="stylesheet" href="/css/lowongan.admin.css">

<div class="admin-container">

    {{-- Card Kiri --}}
    <div class="admin-card">
        <h2 class="admin-title">Data Lowongan</h2>

        <a href="{{ route('lowongan.create') }}" class="btn-primary-admin">+ Tambah Lowongan</a>

        <table class="admin-table mt-3">
            <tr>
                <th>No</th>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Batas Waktu</th>
                <th>Aksi</th>
            </tr>

            @foreach ($lowongans as $l)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $l->posisi }}</td>
                <td>{{ $l->perusahaan }}</td>
                <td>{{ $l->batas_waktu }}</td>
                <td>
                    <a href="{{ route('lowongan.edit', $l->id) }}" class="btn-yellow">Edit</a>

                    <form action="{{ route('lowongan.destroy', $l->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn-red">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- Card Kanan --}}
    <div class="admin-card">
        <h2 class="admin-title">Semua Lowongan</h2>

        <div class="lowongan-grid">
            @foreach ($lowongans as $l)
            <div class="lowongan-item">
                <h3>{{ $l->posisi }}</h3>
                <p>{{ $l->perusahaan }}</p>
                <a href="{{ route('lowongan.show', $l->id) }}" class="btn-link">Lihat Detail</a>
            </div>
            @endforeach
        </div>
    </div>

</div>

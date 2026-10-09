@extends('layouts.app')

@section('content')
<div class="panel">
    <h1>Manajemen Kategori</h1>
    <p>Kelola kategori buku perpustakaan di halaman ini.</p>

    <a href="{{ route('categories.create') }}" class="btn">
        + Tambah Kategori
    </a>

    <a href="{{ route('books.index') }}" class="btn btn-secondary">
        Kembali ke Data Buku
    </a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description ?: '-' }}</td>
                <td>{{ $category->books_count }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn">
                        Edit
                    </a>

                    @if ($category->books_count == 0)
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline"
                        onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                    @else
                    <button type="button" class="btn btn-secondary" disabled title="Kategori masih memiliki buku">
                        Hapus
                    </button>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">
                    Belum ada kategori. Silakan tambahkan kategori terlebih dahulu.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
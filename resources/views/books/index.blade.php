@extends('layouts.app')

@section('content')
<div class="panel">
    <h1>Inventaris Buku</h1>
    <p>Kelola koleksi buku perpustakaan di sini.</p>

    <a href="{{ route('books.create') }}" class="btn">+ Tambah Buku</a>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kelola Kategori</a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>ISBN</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->stock }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}" class="btn">
                        Edit
                    </a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline"
                        onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Belum ada data buku.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
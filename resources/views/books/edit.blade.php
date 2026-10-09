```php
@extends('layouts.app')

@section('content')
<div class="panel">
    <h1>Edit Buku</h1>
    <p>Perbarui informasi buku perpustakaan.</p>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Judul Buku</label>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" maxlength="255" required>

        <label for="author">Penulis</label>
        <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" maxlength="255"
            required>

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}" maxlength="255" required>

        <label for="category_id">Kategori</label>
        <select id="category_id" name="category_id" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>

        <label for="stock">Jumlah Stok</label>
        <input type="number" id="stock" name="stock" value="{{ old('stock', $book->stock) }}" min="0" required>

        <button type="submit" class="btn">
            Simpan Perubahan
        </button>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
```
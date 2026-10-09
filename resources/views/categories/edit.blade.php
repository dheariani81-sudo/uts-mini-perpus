```php
@extends('layouts.app')

@section('content')
<div class="panel">
    <h1>Edit Kategori</h1>
    <p>Perbarui informasi kategori buku.</p>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama Kategori</label>
        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" maxlength="255" required>

        <label for="description">Deskripsi</label>
        <textarea id="description" name="description"
            rows="4">{{ old('description', $category->description) }}</textarea>

        <button type="submit" class="btn">
            Simpan Perubahan
        </button>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
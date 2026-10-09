@extends('layouts.app')

@section('content')
<div class="panel">
    <h1>Tambah Kategori</h1>
    <p>Masukkan nama dan deskripsi kategori buku.</p>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label for="name">Nama Kategori</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" maxlength="255" required>

        <label for="description">Deskripsi</label>
        <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>

        <button type="submit" class="btn">
            Simpan Kategori
        </button>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
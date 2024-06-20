@extends('layout')

@section('content')
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="judul_buku">Judul Buku:</label>
            <input type="text" name="judul_buku" value="{{ old('judul_buku') }}" required>
        </div>
        <div>
            <label for="pengarang">Pengarang:</label>
            <input type="text" name="pengarang" value="{{ old('pengarang') }}" required>
        </div>
        <div>
            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required>
        </div>
        <div>
            <label for="jumlah_halaman">Jumlah Halaman:</label>
            <input type="number" name="jumlah_halaman" value="{{ old('jumlah_halaman') }}" required>
        </div>
        <div>
            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" value="{{ old('penerbit') }}" required>
        </div>
        <div>
            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" value="{{ old('kategori') }}">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection

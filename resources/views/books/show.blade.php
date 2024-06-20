@extends('layout')

@section('content')
    <h1>{{ $book->judul_buku }}</h1>
    <p><strong>Pengarang:</strong> {{ $book->pengarang }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
    <p><strong>Jumlah Halaman:</strong> {{ $book->jumlah_halaman }}</p>
    <p><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
    <p><strong>Kategori:</strong> {{ $book->kategori }}</p>
    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('books.index') }}">Back to Books</a>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'show']);
    }

    // Method untuk mendapatkan daftar buku
    public function index()
    {
        $books = Book::all();
        return response()->json($books, 200);
    }

    // Method untuk mendapatkan detail buku berdasarkan ID
    public function show($id)
    {
        $book = Book::find($id);

        if ($book) {
            return response()->json($book, 200);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    // Method untuk menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'jumlah_halaman' => 'required|integer|min:1',
            'penerbit' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
        ]);

        $book = Book::create($request->all());

        return response()->json(['message' => 'Book created successfully.', 'data' => $book], 201);
    }

    // Method untuk mengupdate buku berdasarkan ID
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if ($book) {
            $request->validate([
                'judul_buku' => 'required|string|max:255',
                'pengarang' => 'required|string|max:255',
                'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
                'jumlah_halaman' => 'required|integer|min:1',
                'penerbit' => 'required|string|max:255',
                'kategori' => 'nullable|string|max:255',
            ]);

            $book->update($request->all());

            return response()->json(['message' => 'Book updated successfully.', 'data' => $book]);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    // Method untuk menghapus buku berdasarkan ID
    public function destroy($id)
    {
        $book = Book::find($id);

        if ($book) {
            $book->delete();

            return response()->json(['message' => 'Book deleted successfully.']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}

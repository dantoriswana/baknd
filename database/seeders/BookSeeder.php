<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'judul_buku' => 'Book Title 1',
            'pengarang' => 'Author 1',
            'tahun_terbit' => 2021,
            'jumlah_halaman' => 300,
            'penerbit' => 'Publisher 1',
            'kategori' => 'Fiction',
        ]);

        Book::create([
            'judul_buku' => 'Book Title 2',
            'pengarang' => 'Author 2',
            'tahun_terbit' => 2022,
            'jumlah_halaman' => 250,
            'penerbit' => 'Publisher 2',
            'kategori' => 'Non-Fiction',
        ]);
    }
}


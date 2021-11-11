<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = Author::create(['name' => 'Aam Amirudin']);
        $author2 = Author::create(['name' => 'Salim A Fillah']);
        $author3 = Author::create(['name' => 'M Fauziah Adhim']);

        $book1 = Book::create(['title' => 'Kupinang kau dengan bismillah',
            'amount' => 3, 'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Jalan para pejuang',
            'amount' => 2, 'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Seminggu belajar laravel',
            'amount' => 3, 'author_id' => $author3->id]);
        $book4 = Book::create(['title' => 'Menyelami buku laravel',
            'amount' => 4, 'author_id' => $author3->id]);

    }
}

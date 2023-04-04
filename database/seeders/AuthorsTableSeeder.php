<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = new Author();
        $author1->firstName = 'J. R. R.';
        $author1->lastName = 'Tolkien';
        $author1->save();

        $author2 = new Author();
        $author2->firstName = 'Max';
        $author2->lastName = 'Mustermann';
        $author2->save();

        $author3 = new Author();
        $author3->firstName = 'Karli';
        $author3->lastName = 'Mittermayr';
        $author3->save();
    }
}

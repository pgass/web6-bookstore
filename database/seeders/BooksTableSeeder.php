<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book1 = new \App\Models\Book();
        $book1->title = 'The Lord of the Rings';
        $book1->isbn = '978-0544003415';
        $book1->subtitle = 'The Fellowship of the Ring';
        $book1->rating = 10;
        $book1->description = 'Erster Teil';
        $book1->published = new DateTime();

        //get the first user
        //associate weil man Fremdschlüssel setzt
        $user = User::all()->first();
        $book1->user()->associate($user);

        $book1->save();

        //add images to book
        $image1 = new \App\Models\Image();
        $image1->title = 'Cover 1';
        $image1->url = 'https://images-na.ssl-images-amazon.com/images/I/51Zt3QZJFJL._SX331_BO1,204,203,200_.jpg';

        $image2 = new \App\Models\Image();
        $image2->title = 'Cover 2';
        $image2->url = 'https://m.media-amazon.com/images/I/813UBZ-O8sL._AC_UY327_FMwebp_QL65_.jpg';

        $book1->images()->saveMany([$image1, $image2]);

        $authors = Author::all()->pluck('id');
        $book1->authors()->sync($authors);

        /*$book2 = new \App\Models\Book();
        $book2->title = 'The Lord of the Rings 2';
        $book2->isbn = '978-0544003416';
        $book2->subtitle = 'The Two Towers';
        $book2->rating = 7;
        $book2->description = 'Zweiter Teil';
        $book2->published = new DateTime();
        $book2->save();*/
    }
}

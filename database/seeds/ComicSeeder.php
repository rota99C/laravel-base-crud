<?php

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics.data');
        /* $comic_artists = implode(",", $comics['artists']); */
        /* ddd($comics); */
        foreach ($comics as $comic) {
            $_comic = new Comic();
            $_comic->title = $comic['title'];
            $_comic->description = $comic['description'];
            $_comic->price = $comic['price'];
            $_comic->series = $comic['series'];
            $_comic->sale_date = $comic['sale_date'];
            $_comic->type = $comic['type'];
            /* $_comic->artists = $comic_artists; */
            /* $_comic->writers = $comic['writers']; */
            $_comic->thumb = $comic['thumb'];
            $_comic->save();
        }

        //
    }
}

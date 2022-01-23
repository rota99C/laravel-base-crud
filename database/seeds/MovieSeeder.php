<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('movies.data');
        foreach ($movies as $movie) {
            $_movie = new Movie();
            $_movie->title = $movie['title'];
            $_movie->year = $movie['year'];
            $_movie->image_thumb = $movie['image_thumb'];
            $_movie->image_cover = $movie['image_cover'];
            $_movie->facebook_page = $movie['facebook_page'];
            $_movie->twitter_page = $movie['twitter_page'];
            $_movie->instagram_page = $movie['instagram_page'];
            $_movie->website_page = $movie['website_page'];
            $_movie->description = $movie['description'];
            $_movie->cast = $movie['cast'];
            $_movie->genres = $movie['genres'];
            $_movie->directors = $movie['directors'];
            $_movie->producers = $movie['producers'];
            $_movie->writers = $movie['writers'];
            $_movie->save();
        }
    }
}

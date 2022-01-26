<?php

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config('characters.data');
        foreach ($characters as $character) {
            $_character = new Character();
            $_character->name = $character['name'];
            $_character->description = $character['description'];
            $_character->image_thumb = $character['image_thumb'];
            $_character->image_cover = $character['image_cover'];
            $_character->powers = $character['powers'];
            $_character->first_appearance = $character['first_appearance'];
            $_character->alter_ego = $character['alter_ego'];
            $_character->occupation = $character['occupation'];
            $_character->facebook_page = $character['facebook_page'];
            $_character->twitter_page = $character['twitter_page'];
            $_character->instagram_page = $character['instagram_page'];
            $_character->video_page = $character['video_page'];
            $_character->save();
        }
    }
}

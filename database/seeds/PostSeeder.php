<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<5;$i++){
            $newPost = new Post();

            $newPost->title =$faker->sentence();
            $newPost->author =$faker->name();
            $newPost->title =$faker->sentence();
            $newPost->text =$faker->sentence();
            $newPost->category =$faker->word();
            $newPost->publication_date =$faker->dateTimeThisDecade();
            $newPost->save();
        }
    }
}
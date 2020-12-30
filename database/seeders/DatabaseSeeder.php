<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    
        Tag::factory(10)->create();
         $PostsData = Post::factory(15)->create();
        foreach ($PostsData as $data){
            $data->tagsRelacion()->attach([
                rand(1,4),
                rand(5,8)
                ]);
        }
        

        // \App\Models\User::factory(10)->create();

    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\MyClass;
use App\Models\User;
use App\Models\Video;
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

        User::create([
            'name' => 'Alfad Sabil Haq',
            'role' => 'admin',
            'email' => 'alfadsabilhaq@gmail.com',
            'password' => bcrypt('123456'),
            'username' => 'sunak27',
        ]);

        User::factory()->count(4)->create();

        Category::create([
            'name' => "Backend Developer",
            'description' => "Lorem, ipsum dolor sit",
        ]);

        ClassRoom::create([
            'name' => "Belajar Golang",
            'category_id' => 1,
            'description' => "Lorem ipsum",
        ]);

        Category::factory()->count(10)->create();
        ClassRoom::factory()->count(10)->create();
        MyClass::factory()->count(10)->create();
        Video::create([
            'title' => 'Golang 1',
            'class_room_id' => 1,
            'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores, autem beatae blanditiis consequatur'
        ]);
        Video::create([
            'title' => 'PHP 1',
            'class_room_id' => 2,
            'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores, autem beatae blanditiis consequatur'
        ]);
        Video::create([
            'title' => 'PHP 2',
            'class_room_id' => 2,
            'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores, autem beatae blanditiis consequatur'
        ]);
    }
}

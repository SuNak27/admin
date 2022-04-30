<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\MyClass;
use App\Models\User;
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
    }
}

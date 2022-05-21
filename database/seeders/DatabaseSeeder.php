<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\Course;
use App\Models\Role;
use App\Models\Type;
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
        // ==== User ====
        User::create([
            'name' => 'Alfad Sabil Haq',
            'role_id' => '1',
            'type_id' => null,
            'email' => 'alfadsabilhaq@gmail.com',
            'password' => bcrypt('123456'),
            'username' => 'sunak27',
        ]);

        User::create([
            'name' => 'Halimi',
            'role_id' => '2',
            'type_id' => null,
            'email' => 'halimi@gmail.com',
            'password' => bcrypt('123456'),
            'username' => 'halimi',
        ]);

        User::create([
            'name' => 'ahmad Dani',
            'role_id' => 3,
            'type_id' => 1,
            'email' => 'dani@gmail.com',
            'password' => bcrypt('123456'),
            'username' => 'dani',
        ]);

        User::factory()->count(10)->create();

        // ==== Role ====
        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'Mentor',
        ]);
        Role::create([
            'name' => 'Stundent',
        ]);

        // ==== Video ====
        Video::factory()->count(10)->create();

        // ==== Category ====
        Category::create([
            'name' => 'Programming',
            'thumbnail' => 'https://i.ytimg.com/vi/QH2-TGUlwu4/hqdefault.jpg',
            'description' => 'This is a programming category',
        ]);
        Category::create([
            'name' => 'Design',
            'thumbnail' => 'https://i.ytimg.com/vi/QH2-TGUlwu4/hqdefault.jpg',
            'description' => 'This is a programming category',
        ]);
        Category::create([
            'name' => 'Music',
            'thumbnail' => 'https://i.ytimg.com/vi/QH2-TGUlwu4/hqdefault.jpg',
            'description' => 'This is a programming category',
        ]);

        // ==== Type ====
        Type::create([
            'name' => 'Free',
            'price' => 0,
            'description' => 'This is a free course',
            'promotion_id' => null,
        ]);

        Type::create([
            'name' => 'Premium',
            'price' => 100,
            'promotion_id' => 1,
            'description' => 'This is a paid course',
        ]);


        // ==== Course ====
        Course::create([
            'name' => 'PHP',
            'description' => 'This is a PHP course',
            'category_id' => 1,
            'type_id' => 1,
            'thumbnail' => '',
        ]);

        Course::create([
            'name' => 'JavaScript',
            'description' => 'This is a JavaScript course',
            'category_id' => 1,
            'type_id' => 2,
            'thumbnail' => '',
        ]);

        Course::create([
            'name' => 'Python',
            'description' => 'This is a Python course',
            'category_id' => 1,
            'type_id' => 2,
            'thumbnail' => '',
        ]);

        Course::create([
            'name' => 'Biola',
            'description' => 'This is a Biola course',
            'category_id' => 3,
            'type_id' => 2,
            'thumbnail' => '',
        ]);

        ClassRoom::create([
            'name' => 'Belajar PHP 1',
            'description' => 'This is a PHP course',
            'mentor_id' => 2,
            'course_id' => 1,
            'video_id' => 1,
        ]);
        ClassRoom::create([
            'name' => 'Belajar PHP 2',
            'description' => 'This is a PHP course',
            'mentor_id' => 2,
            'course_id' => 1,
            'video_id' => 1,
        ]);
        ClassRoom::create([
            'name' => 'Belajar Javascript 1',
            'description' => 'This is a PHP course',
            'mentor_id' => 2,
            'course_id' => 2,
            'video_id' => 1,
        ]);
    }
}

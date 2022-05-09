<?php

namespace Database\Seeders;

use App\Models\Role;
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

        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'Mentor',
        ]);
        Role::create([
            'name' => 'Stundent',
        ]);

        Video::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Rule;
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
            'name' => 'Teacher',
        ]);
        Role::create([
            'name' => 'Student',
        ]);

        Rule::create([
            'name' => 'Create',
        ]);
        Rule::create([
            'name' => 'Read',
        ]);
        Rule::create([
            'name' => 'Update',
        ]);
        Rule::create([
            'name' => 'Delete',
        ]);

        Permission::create([
            'role_id' => 1,
            'rule_id' => 1,
        ]);
        Permission::create([
            'role_id' => 1,
            'rule_id' => 2,
        ]);
        Permission::create([
            'role_id' => 1,
            'rule_id' => 3,
        ]);
        Permission::create([
            'role_id' => 1,
            'rule_id' => 4,
        ]);
        Permission::create([
            'role_id' => 2,
            'rule_id' => 1,
        ]);
        Permission::create([
            'role_id' => 2,
            'rule_id' => 2,
        ]);
        Permission::create([
            'role_id' => 2,
            'rule_id' => 3,
        ]);
    }
}

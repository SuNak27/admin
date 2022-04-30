<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::factory()->count(4)->create();

        Category::create([
            'name' => "Frontend",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit incidunt provident assumenda accusantium blanditiis et distinctio.",
        ]);

        Category::create([
            'name' => "Backend",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit incidunt provident assumenda accusantium blanditiis et distinctio.",
        ]);

        Category::create([
            'name' => "Fullstack",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit incidunt provident assumenda accusantium blanditiis et distinctio.",
        ]);
    }
}

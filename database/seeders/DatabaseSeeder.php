<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Test User',
            'role_id' => '2',
            'username' => 'testuser',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'password_decode' => 'password',
            'active' => 1
        ]);

        Role::create([
            'name' => 'Admin',
            'active' => 1
        ]);

        Role::create([
            'name' => 'Data Entry',
            'active' => 1

        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'active' => 1

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'active' => 1

        ]);

        User::factory(3)->create();
        Post::factory(20)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Category::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        // echo "Seeding data";
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Category::create([
            'title' => 'Fashion',
            'Description' => 'This is a test description'
        ]);
        
        \App\Models\Category::create([
            'title' => 'Fashion',
            'Description' => 'This is a test description'
        ]);
    }
}

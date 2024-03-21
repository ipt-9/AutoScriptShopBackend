<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Picture;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()
             ->count(20)
             ->has(Product::factory()->count(10)->has(Picture::factory()->count(3)))
             ->create();

        \App\Models\User::factory()->create([
            'username' => 'Test User',
             'email' => 'test@example.com',
         ]);
    }
}

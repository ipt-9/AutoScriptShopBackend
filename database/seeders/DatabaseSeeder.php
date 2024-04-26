<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Task;
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
             ->count(1)
             ->has(Product::factory()->count(10)->has(Picture::factory()->count(3))->has(Tag::factory()->count(4)->has(Product::factory()->set(key:'user_id', value: 1 ))))
             ->create();

        \App\Models\User::factory()->create([
            'username' => 'Test User',
             'email' => 'test@example.com',
         ]);
        Tag::factory()
            ->count(1)->has(Product::factory()->count(2)->set(key:'user_id', value: 1 ))->create([ 'tag'=>"hello"]);

        User::factory()
            ->count(10)
            ->has(Task::factory())
            ->create();

        User::factory()
            ->count(10)
            ->has(Task::factory()->set(key:'worker_id', value: 1 ))
            ->create();



    }
}

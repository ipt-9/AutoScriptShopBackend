<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Shipping_address;
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


        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datei-Backup-Automatisierung")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "E-Mail-Benachrichtigungs-Skript")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Web-Scraping-Automat")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datenbank-Wartungs-Tool");
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Berichterstellungs-Automatisierer")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "System-Überwachungs-Skript")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Repetitive Aufgaben Automatisierer")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Benutzerverwaltung-Tool")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Log-Analyse-Skript")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datei-Backup-Automatisierung")->create();
        Product::factory()->set(key:'user_id', value: 1 )->set(key:"title",value: "Datei-Umbenennungs-Automatisierer")->create();
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
            ->has(Task::factory()->set(key:'worker_id', value: 1 )->has(Tag::factory()->count(2)))
            ->create();

        User::factory()
            ->count(10)
            ->has(Shipping_address::factory())
            ->create();




    }
}

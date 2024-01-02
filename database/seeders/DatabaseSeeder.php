<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, Jvascript',
        //     'company' => 'Acme corp.',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@acme.corp',
        //     'website' => 'http://acmer.corp',
        //     'description' => 'Laravel Senior Developer Lorem impsum bla bla.'
        // ]);
    }
}

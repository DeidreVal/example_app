<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Listing::factory(6)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company_name' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet'
        // ]);

        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'laravel, backend, api',
        //     'company_name' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@gmail.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet'
        // ]);
    }
}

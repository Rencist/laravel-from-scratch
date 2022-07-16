<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        /* Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' =>'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum, dolor sit amet consectetur 
            adipisicing elit. Laboriosam error officia amet soluta 
            mollitia, velit, minima cum dolorum quo dolorem distinctio, 
            aperiam aspernatur vel totam tempore veniam at iure 
            asperiores aliquam? Voluptatem in recusa'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' =>'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum, dolor sit amet consectetur 
            adipisicing elit. Laboriosam error officia amet soluta 
            mollitia, velit, minima cum dolorum quo dolorem distinctio, 
            aperiam aspernatur vel totam tempore veniam at iure 
            asperiores aliquam? Voluptatem in recusa lorem ahha dawkndawd'
        ]); */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
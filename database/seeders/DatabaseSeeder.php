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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::factory(6)->create();

        // Listing::create([
        //     'title'=> 'Laravel Senior Deveolper',
        //     'tags'=>'laravel, javascript',
        //     'company'=> 'Ame Corp',
        //     'location'=> 'boston, MA',
        //     'email'=>'test@test.com',
        //     'website'=>'https:www.acme.com',
        //     'description'=>'The Romantic Mukiga
        //     @emeka_ug
        //     ·
        //     6h
        //     The same media you’re calling mafia is the one which helped you look for votes when you were nominated in the BET AWARDS my guy. Don’t create enemies with people who helped you make a mark. ',
        // ]);

        // Listing::create([
        //     'title'=> 'Laravel Junior Deveolper',
        //     'tags'=>'laravel, javascript, MDE',
        //     'company'=> 'Ame Corp',
        //     'location'=> 'boston, MA',
        //     'email'=>'test@test.com',
        //     'website'=>'https:www.acme.com',
        //     'description'=>'
        //     The same media you’re calling mafia is the one which helped you look for votes when you were nominated in the BET AWARDS my guy. Don’t create enemies with people who helped you make a mark. ',
        // ]);
    }
}

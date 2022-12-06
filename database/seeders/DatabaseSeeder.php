<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Listing;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();


        // Listing::create(
        //     [   'user_id' => 2,
        //         'title' => 'Night in the sea side ',
        //         'title' => 'Night in the sea side ',
        //         'tags' => ' Bad Breakfast and dinner',
        //         'hoster' =>' Jhonson familly',
        //         'email' => 'jhon.doe@email.com',
        //         'location' => 'California 4511, jhon street 34',
        //         'description' => 'hosting voluntaires',
        //     ]
        // );
        // Listing::create(
        //     [   'user_id' => 3,
        //         'title' => 'Night in the desert',
        //         'tags' => ' Bad Breakfast and dinner',
        //         'hoster' =>' Jhonson familly',
        //         'email' => 'jhon.doe@email.com',
        //         'location' => 'colombia 4511, jhon street 34',
        //         'description' => 'hosting voluntaires',
        //     ]
        // );
        // Listing::create(
        //     [   'user_id' => 4,
        //         'title' => 'Night in the natue',
        //         'tags' => ' Bad and Breakfast',
        //         'hoster' =>' Jhoan familly',
        //         'email' => 'james.doe@email.com',
        //         'location' => 'Poland 4511, jhon karaback 34',
        //         'description' => 'hosting voluntaires',
        //     ]
        // );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

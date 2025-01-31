<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lists;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $user=User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Lists::factory(6)->create([
        //     'user_id'=> $user->id
        // ]);

        // Lists::create([
        //     "id"=> User::factory()->create()->id,
        //     "title"=> "gym",
        //     "user_id"=> $user->id
        // ]);

        // Lists::create([
        //     "id"=> User::factory()->create()->id,
        //     "title"=> "code",
        //     "user_id"=> $user->id
        // ]);
    }
}

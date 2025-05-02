<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        for ($i = 0; $i < 10; $i++) {
            Image::create([
                'imageable_id'   => rand(1, 5),
                'imageable_type' => $this->getRandomType(),
            ]);
        }
    }

    private function getRandomType()
    {
        return rand(0, 1) ? Post::class : User::class;
    }
}

<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 25; $i++) {
            Post::create([
                'title'       => fake()->sentence(),
                'description' => fake()->paragraph(),
                'image'       => 'posts/zMfCGBjQpflz9Izbnr3blrQuY9U1qRrBzCqhVDD8.jpg',
                'category'    => fake()->randomElement(['desain', 'website', 'aplikasi']),
                'user_id'     => 1
            ]);
        }
    }
}

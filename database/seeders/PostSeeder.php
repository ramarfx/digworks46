<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagePath = public_path('image/banner.gif');
        $imageName = 'posts/profile_' . time() . '.webp';

        File::copy($imagePath, storage_path('app/public/' . $imageName));
        for ($i = 0; $i < 25; $i++) {
            Post::create([
                'title'       => fake()->sentence(),
                'description' => fake()->paragraph(),
                'image'       =>  $imageName,
                'category'    => fake()->randomElement(['desain', 'website', 'aplikasi']),
                'user_id'     => 1
            ]);
        }
    }
}

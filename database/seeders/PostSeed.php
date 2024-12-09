<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => "Laravel 11 Updates",
                'content' => "New features released.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Upgrade Laravel 11",
                'content' => "Steps to upgrade.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Master Laravel 11",
                'content' => "Tips and tricks.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]
        );
    }
}

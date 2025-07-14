<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'テスト投稿',
            'body' => 'これは最初の投稿です。',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

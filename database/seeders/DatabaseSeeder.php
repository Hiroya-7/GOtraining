<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PartSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(FolderSeeder::class);
        $this->call(LogSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(FollowSeeder::class);
    }
}

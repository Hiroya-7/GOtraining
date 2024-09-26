<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Follow;
use Illuminate\Support\Facades\DB;
use DateTime;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('follows')->insert([
                'follower_id' => 12,
                'followee_id' => 11,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

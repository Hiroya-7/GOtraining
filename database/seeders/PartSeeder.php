<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parts')->insert([
                'user_id' => 11,
                'name' => '胸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('parts')->insert([
                'user_id' => 12,
                'name' => '足',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

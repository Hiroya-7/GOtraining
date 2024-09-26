<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  DB::table('users')->insert([
        //     'name' => 'test',
        //     'email' => 'test@mail.com',
        //     'email_verified_at' => now(),
        //     'password' => static::$password ??= Hash::make('password'),
        //     'remember_token' => Str::random(10),
        //     'image_url' => "https://yt3.googleusercontent.com/AwanU4ecUB383L-80GRcrPs9ic0E-b2aMnJy_0IO4M_fj_6YiQqnWMMt6N_fyE36PpCLZ0Kf7g=s900-c-k-c0x00ffffff-no-rj",
        //     'height' => 173,
        //     'weight' => 67,
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        //  ]);
        User::factory()->count(10)->create();
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'image_url' => "https://yt3.googleusercontent.com/AwanU4ecUB383L-80GRcrPs9ic0E-b2aMnJy_0IO4M_fj_6YiQqnWMMt6N_fyE36PpCLZ0Kf7g=s900-c-k-c0x00ffffff-no-rj",
            'height' => 173,
            'weight' => 67,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password2'),
            'remember_token' => Str::random(10),
            'image_url' => "https://yt3.googleusercontent.com/AwanU4ecUB383L-80GRcrPs9ic0E-b2aMnJy_0IO4M_fj_6YiQqnWMMt6N_fyE36PpCLZ0Kf7g=s900-c-k-c0x00ffffff-no-rj",
            'height' => 173,
            'weight' => 67,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
        
    }
}

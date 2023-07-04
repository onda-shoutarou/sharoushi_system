<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' => 'test1@example.com',
                'password' => Hash::make("password"),
                'created_at' => $now,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'Nama' => Str::random(10),
                'NoTelp' => Str::random(10),
                'Username' => Str::random(10).'@gmail.com',
                'Password' => Str::random(10),
                'TipeUser' => 'Aktif',
            ],
            [
                'Nama' => Str::random(10),
                'NoTelp' => Str::random(10),
                'Username' => Str::random(10).'@gmail.com',
                'Password' => Str::random(10),
                'TipeUser' => 'Aktif',
            ]
            
        ]);
    }
}

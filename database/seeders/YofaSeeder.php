<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class YofaSeeder extends Seeder
{
    /**
     * Seed Yofa.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'yofa',
            'name' => 'Yofandra',
            'email' => 'yofandraarta@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}

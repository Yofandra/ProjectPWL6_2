<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AulSeeder extends Seeder
{
    /**
     * Seed Aul.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'aulia',
            'name' => 'Aulia Cahya',
            'email' => 'auliabrilianaa@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
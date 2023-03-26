<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'nama'=> 'Yofandra Arta Priyoga',
            'pendidikan'=> 'Mahasiswa Polinema',
            'asal'=> 'AG people',
            'funfact'=> 'Gak suka pedes'         
        ]);
        
        DB::table('posts')->insert([
            'nama'=> 'Aulia Cahya Briliana',
            'pendidikan'=> 'Mahasiswa Polinema',
            'asal'=> 'AG juga',
            'funfact'=> 'Suka Haechan'         
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Iphone 13",
            'description' => "Mobile Phone Apple",
            'amount' => 980,
            'categoria_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => "Ipad Pro 11",
            'description' => "Tablet Apple",
            'amount' => 850,
            'categoria_id' => 3
        ]);
        DB::table('products')->insert([
            'name' => "PlayStation 5",
            'description' => "Video Console",
            'amount' => 720,
            'categoria_id' => 4
        ]);
        DB::table('products')->insert([
            'name' => "PC Gamer",
            'description' => "Computer Gamer",
            'amount' => 2000,
            'categoria_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Silla Gamer",
            'description' => "Silla Gamer +100fps",
            'amount' => 400,
            'categoria_id' => 5
        ]);
    }
}

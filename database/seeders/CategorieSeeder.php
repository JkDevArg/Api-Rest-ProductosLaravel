<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'name_categorie' => 'Phone',
            'code' => '1'
        ]);
        DB::table('categorias')->insert([
            'name_categorie' => 'Computer',
            'code' => '2'
        ]);
        DB::table('categorias')->insert([
            'name_categorie' => 'Table Phones',
            'code' => '3'
        ]);
        DB::table('categorias')->insert([
            'name_categorie' => 'Video Console',
            'code' => '4'
        ]);
        DB::table('categorias')->insert([
            'name_categorie' => 'Accesories',
            'code' => '5'
        ]);
    }
}

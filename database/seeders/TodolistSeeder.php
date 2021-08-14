<?php

namespace Database\Seeders;

use App\Models\Todolist;
use Illuminate\Database\Seeder;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todolist::create([
            'judul' => 'install laravel',
            'deskripsi' => 'cara mudah menginstal laravel'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Step::create([
            'todolist_id' => '1',
            'judul' => 'install largaon',
            'deskripsi' => 'cara menginstall largaon'
        ]);

        Step::create([
            'todolist_id' => '1',
            'judul' => 'install compser',
            'deskripsi' => 'cara menginstall composer'
        ]);

        Step::create([
            'todolist_id' => '1',
            'judul' => 'install laravel',
            'deskripsi' => 'cara menginstall laravel'
        ]);
    }
}

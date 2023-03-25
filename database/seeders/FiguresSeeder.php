<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiguresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'title' => 'Belajar Install Dengan Laravel',
            'slug' => ' belajar-install-dengan-laravel',
            'content' => 'Belajar Install Laravel itu menyenangkan',
            'draft' => 0
        ],
        [
            'title' => 'Belajar Controller Dengan Laravel',
            'slug' => ' belajar-controller-dengan-laravel',
            'content' => 'Belajar Controller Laravel itu menyenangkan',
            'draft' => 0
        ],
        [
            'title' => 'Belajar Model Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
        ]];
        DB::table('figures')->insert($data);
    }

}

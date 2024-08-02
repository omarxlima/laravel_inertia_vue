<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computador',
            'slug' => 'sam'
        ]);

        Category::create([
            'name' => 'Telefone',
            'slug' => 'maca'
        ]);

        Category::create([
            'name' => 'Notebook',
            'slug' => 'moto'
        ]);
    }
}

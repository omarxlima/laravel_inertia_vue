<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title'=> 'Elit asdfasdf asdfasdfa asdfasf',
            'price'=> '2000.00',
        'quantity'=> 10,
        'category_id'=> 1,
        'brand_id'=> 1,
        'description'=> 'asdfjklasdjf jkljkljkl fjaslfjlaçsf',
        
        ]);

        
    }
}

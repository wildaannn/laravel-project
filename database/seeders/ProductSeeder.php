<?php

namespace Database\Seeders;

use App\Models\Product;
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
            'name'=>'Chitato',
            'code'=>'743209575879',
            'price'=>14900
        ]);
        Product::create([
            'name'=>'Pocari Sweat',
            'code'=>'579865875590',
            'price'=>7900
        ]);
        Product::create([
            'name'=>'Roma Sari Gandum',
            'code'=>'658368939223',
            'price'=>13000
        ]);
        Product::create([
            'name'=>'Aoka',
            'code'=>'657654544627',
            'price'=>2500
        ]);
        Product::create([
            'name'=>'Big cola',
            'code'=>'765454367808',
            'price'=>3500
        ]);
    }
}

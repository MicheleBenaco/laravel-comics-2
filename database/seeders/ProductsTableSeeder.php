<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db_seeder');
        foreach($products as $product){
            $newProduct = new Product();
            $newProduct->title = $product['title'];
            $newProduct->description = $product['description'];
            $newProduct->thumb = $product['thumb'];
            $newProduct->save();

        }
    }
}

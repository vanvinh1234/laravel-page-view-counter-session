<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product();
        $product->name = 'Sản phẩm 001';
        $product->description = 'Sản phẩm có mã 001';
        $product->price = 1.5;
        $product->view_count = 0;
        $product->save();

        $product = new App\Product();
        $product->name = 'Sản phẩm 002';
        $product->description = 'Sản phẩm có mã 002';
        $product->price = 2.5;
        $product->view_count = 0;
        $product->save();

        $product = new App\Product();
        $product->name = 'Sản phẩm 003';
        $product->description = 'Sản phẩm có mã 003';
        $product->price = 1.5;
        $product->view_count = 0;
        $product->save();
    }

}

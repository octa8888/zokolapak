<?php

use App\Model\Product;
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
        $model=new Product();
        $model->product_name='product 1';
        $model->description='desc 1';
        $model->price=100000;
        $model->save();
    }
}

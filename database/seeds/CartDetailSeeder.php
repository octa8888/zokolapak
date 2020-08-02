<?php

use App\Model\CartDetail;
use Illuminate\Database\Seeder;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model=new CartDetail();
        $model->cart_id=1;
        $model->product_id=1;
        $model->quantity=5;
        $model->save();
    
        $model=new CartDetail();
        $model->cart_id=1;
        $model->product_id=2;
        $model->quantity=10;
        $model->save();
    }
}

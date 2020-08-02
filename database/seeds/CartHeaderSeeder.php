<?php

use App\Model\CartHeader;
use Illuminate\Database\Seeder;

class CartHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model=new CartHeader();
        $model->user_id=1;
        $model->save();
    }
}

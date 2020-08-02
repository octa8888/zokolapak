<?php

use App\Model\TransactionDetail;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model=new TransactionDetail();
        $model->transaction_id=1;
        $model->product_id=1;
        $model->quantity=5;
        $model->save();
    
        $model=new TransactionDetail();
        $model->transaction_id=1;
        $model->product_id=2;
        $model->quantity=10;
        $model->save();
    }
}

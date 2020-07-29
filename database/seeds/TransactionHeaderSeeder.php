<?php

use App\Model\TransactionHeader;
use Illuminate\Database\Seeder;

class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model=new TransactionHeader();
        $model->user_id=1;
        $model->transaction_date=new DateTime();
        $model->save();
    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model=new User();
        $model->name='a';
        $model->email='a@a.com';
        $model->address='address a';
        $model->phone='08123456789';
        $model->password=bcrypt('a');
        $model->save();

        $model=new User();
        $model->name='b';
        $model->email='b@b.com';
        $model->address='address b';
        $model->phone='08123456788';
        $model->password=bcrypt('b');
        $model->save();
    }
}

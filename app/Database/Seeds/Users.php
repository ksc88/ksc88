<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $model=new \App\Models\UserModel;
        $data = [
           'username' => 'admin',
           'password' => '123@123',
           'section'=>'admin'
        ];
            $model->insert($data);
           dd($model->errors());
    }
}

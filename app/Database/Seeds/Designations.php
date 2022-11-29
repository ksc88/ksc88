<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Designations extends Seeder
{
    public function run()
    {
        $model=new \App\Models\DesignationsModel();
        $data = [
           'designation' => 'cmd'];
          
            $model->insert($data);
    }
}

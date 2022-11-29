<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Department extends Seeder
{
    public function run()
    {  
         $model=new \App\Models\Department;
        $data = [
           'deptName' => 'hr'];
          
            $model->insert($data);

    }


}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblDepartment extends Migration
{
    public function up()
    {
        //       
        $this->forge->addField([
            'id'=>[
              'type'=> 'INT',
              'constraint'=>50,
              'unsigned'=>true,
              'auto_increment'=>true
            ],
            'deptName'=>[
                'type'=> 'varchar',
                'constraint'=>255,
                'default'=>null,
            ],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('tbl_department');   
    }

    public function down()
    {
        //
        $this->forge->dropTable('tbl_department');
    }
}

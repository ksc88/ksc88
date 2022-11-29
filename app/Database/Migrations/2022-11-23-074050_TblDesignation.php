<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblDesignation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
              'type'=> 'INT',
              'constraint'=>50,
              'unsigned'=>true,
              'auto_increment'=>true
            ],
            'designation'=>[
                'type'=> 'varchar',
                'constraint'=>255,
                'null'=>true,
                'default'=>null
                
            ],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('designation', false, true);
            $this->forge->createTable('tbl_designations');  

    }

    public function down()
    {
        //
    }
}

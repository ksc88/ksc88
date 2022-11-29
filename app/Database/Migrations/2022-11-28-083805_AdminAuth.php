<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminAuth extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
              'type'=> 'INT',
              'constraint'=>11,
              'unsigned'=>true,
              'auto_increment'=>true,
              ],     
            'username'=>[
                'type'=>'VARCHAR',
                'constraint' => 100,
         
                ], 
            'password'=>[
                'type'=>'VARCHAR',
                'constraint' => 255,
                'null'=>true,
                ], 
            'section'=>[
                'type'       => 'ENUM',
                'constraint' => ['admin', 'bill', 'pnp'],
                ],
            ]);
            $this->forge->addPrimaryKey('id');
           $this->forge->createTable('tbl_users');
    }

    public function down()
    {
        $this->forge->DropTable('tbl_users');
    }
}

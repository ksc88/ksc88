<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblAllocatedLeaves extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
              'type'=> 'INT',
              'constraint'=>50,
              'unsigned'=>true,
              'auto_increment'=>true,
              ],
        
            'cl'=>[
                'type'=>'int',
                'constraint' => 20,
                'null'=>true,
                ],
        
            'el'=>[
                'type'=>'int',
                'constraint' => 20,
                'null'=>true,
                ],
            'rh'=>[
                'type'=>'int',
                'constraint' => 20,
                'null'=>true,
                ],
            'year'=>[
                'type'=>'int',
                'constraint' => 20,
                'null'=>true,
                ],
            'created_at'=>[
                'type'    => 'TIMESTAMP', 
                'null'=>true,
                ],
            'updated_at'=>[
                'type'    => 'TIMESTAMP', 
                'null'=>true,
                ],

            'description'=>[
                'type'=>'MEDIUMTEXT',
                'null'=>true,
                'default'=>null
                ],

            'empPerNo'=>[
                'type'       => 'INT',
                'constraint' => 20,
                'null'=>true,
                'default'    => null,
                ],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('tbl_allocated_leaves');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_allocated_leaves');
    }
}

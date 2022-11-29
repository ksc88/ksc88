<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;
class Leaves extends Migration
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
            'referenceId'=>[
                'type'    => 'VARCHAR',
                'constraint'=>255,
                'default' =>  new RawSql('CURRENT_TIMESTAMP'),
                
                ],
            'leaveType'=>[
                'type'=>'VARCHAR',
                'constraint' => 100,
                'null'=>true,
                ],
            'fromDate'=>[
                'type'=>'DATE',
                'null'=>true,
                'default'=>null,                
                ],    
            'toDate'=>[
                'type'=>'DATE',
                'null'=>true,
                'default'=>null, 
                ],
            'noOfDays'=>[
                'type'=>'INT',
                 'null'=>true,
                'default'=>null, 
                ],
            'postingDate'=>[
                'type'    => 'TIMESTAMP', 
                'null'=>true,
                'default' =>  new RawSql('CURRENT_TIMESTAMP'),
                ],
            'preffix'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>120,
                    'null'=>true,
                    'default'=>null
                    ],
            'suffix'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>120,
                    'null'=>true,
                    'default'=>null
                       ],
            'adminRemark'=>[
                'type'=>'MEDIUMTEXT',
                'null'=>true,
                'default'=>null
                ],
            'adminRemarkDate'=>[
                'type'    => 'TIMESTAMP',    
                'null'=>true,
                'default' =>  new RawSql('CURRENT_TIMESTAMP'),
                ],
            'description'=>[
                'type'=>'MEDIUMTEXT',
                'null'=>true,
                'default'=>null
                ],
            'address'=>[
                    'type'=>'MEDIUMTEXT',
                    'null'=>true,
                    'default'=>null
                    ],    
            'status'=>[
                'type'       => 'ENUM',
                'constraint' => ['approved', 'rejected', 'pending'],
                'default'    => 'pending',
                ],
            'isRead'=>[
                'type'       => 'INT',
                'constraint' => 1,
                'default'    => 0,
                ],
            'isStationLeave'=>[
                    'type'       => 'INT',
                    'constraint' => 1,
                    'default'    => 0,
                    ],
            'empPerNo'=>[
                'type'       => 'INT',
                'constraint' => 20,
                'null'=>true,
                'default'    => null,
                ],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('referenceId', false, true);
           $this->forge->createTable('tblEmpLeave');
    }

    public function down()
    {
        $this->forge->dropTable('tblEmpLeave');
    }
}

<?php
namespace App\Models;

use CodeIgniter\Model;
class AllocatedLeaveModel extends Model
{
    protected $table      = 'tbl_allocated_leaves';
    protected $returnType='\App\Entities\AllocatedEmployeeLeave';
    protected $allowedFields = ['year','cl', 'el','rh','created_at','updated_at','description','empPerNo'];
    protected $useTimestamps = true;
   // protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at'   

public function leaveDetailByPerNo($PersonalNo){

  $data= $this->where('empPerNo',$PersonalNo)
                ->where('year',date('Y'))
                ->first();
   if($data===null){
     return new \App\Entities\AllocatedEmployeeLeave();
   }
   else{
      return $data;
   }
   

}

}



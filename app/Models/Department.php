<?php
namespace App\Models;

use CodeIgniter\Model;
class Department extends Model
{
    protected $table      = 'tbl_department';
    protected $allowedFields = ['deptName'];



public function allDept(){
   $dept= $this->findAll();
   return $dept;

}

}
<?php
namespace App\Models;

use CodeIgniter\Model;
class DesignationsModel extends Model
{
    protected $table      = 'tbl_designations';
    protected $allowedFields = ['designation'];

public function allDesignations(){
   $designations= $this->findAll();
   return $designations;

}

}
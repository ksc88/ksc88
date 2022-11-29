<?php

namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect('default');
    }
    protected $table = 'tbl_users';
   // protected $returnType='\App\Entities\Employee';
	protected $allowedFields = ['username','password','section'];

protected $beforeInsert=['beforeInsert'];

    protected function beforeInsert(array $data){
        $data=$this->passwordHash($data);
        return $data;

    }
    protected function passwordHash(array $data){
        if(isset($data['data']['password'])){
            $data['data']['password']=password_hash($data['data']['password'],PASSWORD_DEFAULT);
            return $data;
        }
        
    }
    public function findByUserName($userName)
    {
       return $this->where('userName',$userName)
                   ->first();
    }


}




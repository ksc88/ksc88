<?php

namespace App\Models;
use CodeIgniter\Model;
class EmployeeModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect('default');
    }
    protected $table = 'employee';
    protected $returnType='\App\Entities\Employee';
	protected $allowedFields = [
	'first_name','middle_name' ,'last_name','email','address','city','contact','per_no','password',
	'category','gender','dob','aadhar','blood_group','family_detail','pan','designation','doj',
	'd_of_retirment','d_of_increment','department','basic_pay',
	'bank_account','bank_name','bank_ifsc','gpfno','status'	
	];
protected $beforeInsert=['beforeInsert'];
protected $beforeUpdate=['beforeUpdate'];

    protected function beforeInsert(array $data){
        $data=$this->passwordHash($data);
        return $data;

    }
    protected function beforeUpdate(array $data){
        $data=$this->passwordHash($data);
        return $data;

    }
  
    protected function passwordHash(array $data){
        if(isset($data['data']['password'])){
            $data['data']['password']=password_hash($data['data']['password'],PASSWORD_DEFAULT);
            return $data;

        }
        
    }

	public function getEmployee($slug = false)
        {
            if ($slug === false) {
                return $this->findAll();
            }
            return $this->where(['id' => $slug])->first();
        }

    public function saveLeaveType()
    {
        $builder = $this->db->table('leave_type');
        $builder->insert($_POST);
        
       // $insertId = $this->db->insertId();
        return true;        
    }  

 public function findByPersonalNo($per_no)
 {
    return $this->where('per_no',$per_no)
                ->first();
 }

}




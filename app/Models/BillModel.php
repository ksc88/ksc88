<?php

namespace App\Models;

use CodeIgniter\Model;

class BillModel extends Model
{
    protected $table = 'bill';
    
    protected $allowedFields = ['customer_id', 'contract_no','contract_value','contract_dt','invoice_number','invoice_fy','invoice_mnth','invoice_type','invoice_amt','invoice_recvd_amt','invoice_dt','pr_dt'];

    // Dashboard of dashboadr of finance
public function dof($slug = false)
{
    if ($slug === false) {
        $query=$this->db->query("SELECT sum(`invoice_amt`) AS 'total_inv_value', sum(`invoice_amt`)-SUM(`invoice_recvd_amt`) as 'outstandind' FROM `bill` WHERE `invoice_type`=40 GROUP BY `invoice_fy`;");
        $query=$this->db->query('SELECT SUM(`contract_value`) as contract_value ,sum(`invoice_amt`) as total_invoice ,(sum(invoice_amt)-SUM(invoice_recvd_amt)) as outstanding,invoice_fy from bill GROUP BY invoice_fy ;');
       // $query=$this->db->query('SELECT `invoice_fy`,SUM(`invoice_amt`) as total,`invoice_type` FROM `bill` GROUP BY `invoice_type`,`invoice_fy`;');
        return $query;
    }
   // return $this->where(['id' => $slug])->first();
}
public function dof2($slug = false)
{
    if ($slug === false) {
        $query=$this->findAll();
        return $query;
    }
   // return $this->where(['id' => $slug])->first();
}
public function dof3($slug = false)
{
    if ($slug === false) {
        $query=$this->db->query("SELECT `invoice_fy` , sum(`invoice_amt`) AS 'total_inv_value', sum(`invoice_amt`)-SUM(`invoice_recvd_amt`) as 'outstanding'FROM `bill` WHERE `invoice_type`=40 GROUP BY `invoice_fy`;");
        return $query->getResultArray();      
    }
   // return $this->where(['id' => $slug])->first();
}
public function dof3_2($slug = false)
{
    if ($slug === false) {
        $query=$this->db->query("SELECT `invoice_fy` , sum(`invoice_amt`) AS 'total_inv_value', sum(`invoice_amt`)-SUM(`invoice_recvd_amt`) as 'outstanding'FROM `bill` WHERE `invoice_type`=60 GROUP BY `invoice_fy`;");
        return $query->getResultArray();
       
    }
   // return $this->where(['id' => $slug])->first();
}
public function dof4($slug = false)
{
    if ($slug === false) {
        $query=$this->db->query('SELECT SUM(`contract_value`) as total_contract_value ,fy FROM `contract` GROUP By `fy`;');
        return $query->getResultArray();}
   // return $this->where(['id' => $slug])->first();
}
public function getCustomers($slug = false)
{      
    if ($slug === false) {    
        $builder = $this->db->table('customer');   
        $builder->orderBy('customer_id', 'ASC');
        $query   = $builder->get(); // $query=$this->db->query('SELECT * FROM customer');   
          return $query->getResultArray(); // return $this->where(['id' => $slug])->first();
    }
     else{
        $query=$this->db->query('SELECT * FROM customer where id='.$slug);   
        return $query->getRow();
     }  
    
   // return $this->where(['id' => $slug])->first();
    // if ($slug === false) {
    //     $builder = $this->db->table('customer');   
    //     $builder->orderBy('customer_id', 'ASC');
    //     $query   = $builder->get(); // $query=$this->db->query('SELECT * FROM customer');   
    //     return $query->getResultArray();} // return $this->where(['id' => $slug])->first();
}
public function getContract($slug = false){if($slug === false) {
        $builder = $this->db->table('contract');   
        $builder->orderBy('customer_id', 'ASC');
        $query= $builder->get(); //$query=$this->db->query('SELECT * FROM customer');   
        return $query->getResultArray();}
   // return $this->where(['id' => $slug])->first();
}

public function saveCustomer()
{
    $builder = $this->db->table('customer');
    $builder->insert($_POST);
       // $insertId = $this->db->insertId();
    return true;        
} 

public function saveContract()
{
    $builder = $this->db->table('contract');
    $builder->insert($_POST);
       // $insertId = $this->db->insertId();
    return true;        
} 
public function updateCustomer($id)
{   $builder = $this->db->table('customer');
    $builder->update($_POST,'id='.$id);// $insertId = $this->db->insertId();
    return true;        
} 

// public function saveBill()
// {
//     $builder = $this->db->table('bill');
//     //$builder->insert($_POST);
    
//    // $insertId = $this->db->insertId();
//     return true;        
// }


// Bill //Invoices 

public function getBill($slug = false){
    if ($slug === false) {
        $builder = $this->db->table('bill');
        $data= $builder->get();
        return $data;}
     return $this->where(['id' => $slug])->first();
}


}
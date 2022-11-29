<?php
namespace App\Models;
use CodeIgniter\Model;
class Contract extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect('default');
    }
    protected $table = 'contract';
    protected $primaryKey = 'id';
	protected $allowedFields = [
	'customer_id','contract_number' ,'contract_date','fy',
	'contract_value','gst_value'
	];
}
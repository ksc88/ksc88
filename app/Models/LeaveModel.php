<?php

namespace App\Models;

use CodeIgniter\Model;

class LeaveModel extends Model
{
    
    protected $table      = 'tblempleave';
 
    protected $allowedFields = ['referenceId', 'leaveType','fromDate',
                                'toDate','noOfDays','postingDate','preffix','suffix',
                                'adminRemark','adminRemarkDate','description','address',
                                'status','approved_at','isRead','isStationLeave','empPerNo'];
        protected $validationRules = [
                'referenceId'        => 'required|is_unique[tblempleave.referenceId]',
                                     
                              ];
         protected $validationMessages = [
         'referenceId' => [
                'is_unique' => 'Sorry.There is duplicate Entry Or That leave has already been applied. Please check leave history before ReApply .',
                                        ],
         ];

	public function getLeaveByPerNo($empPerNo)
        {
            return $this->where('empPerNo',$empPerNo)->findAll();
        }   
}
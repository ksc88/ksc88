<?php
namespace App\Libraries;
use CodeIgniter\I18n\Time;
use \App\Models\Admin;
use \App\Models\LeaveModel;
class GenralMethods{
    public function refrenceId(){
       
        $time = Time::now('Asia/Kolkata', 'en_US');
        $year= $time->getYear();   // 2016
        $month=$time->getMonth();  // 8
        $day= $time->getDay();    // 12
        $hrs= $time->getHour();   // 16
        $min= $time->getMinute(); // 15
        $sec= $time->getSecond(); // 23
       return $refId=$year.$month.$day.$hrs.$min.$sec;
    }
    
    public function searchEmpByDepartment($department)
    {
       $model=new Admin;
       $data=$model->where('department',$department)
                            ->findAll();
        return $data;
     }

    public function empDeptWise()
    {
       $model=new Admin;
       $data=$model->select('department')->distinct()->findAll();
        return $data;
     }

     public function searchapprovedLeaveByPerNo($empPerNo,$status)
     {   
       $model=new LeaveModel;
       $data=$model->where('empPerNo',$empPerNo)
                            ->where('status','approved')
                            ->findAll();
        return $data;

     } 
     public function getAllEmp()
     {   
       $model=new Admin;
       $data=$model->where('status',1)
                            ->findAll();
        return $data;
     } 
     public function getEmpByPerNo($empPerNo)
     {   
       $model=new Admin;
       $data=$model->where('per_no',$empPerNo)
                  ->first();
        return $data;
     } 
}
<?php
namespace App\Controllers;

use CodeIgniter\Model;
use \App\Models\LeaveModel;
class Leave extends BaseController{

    public function dashboard(){
      $model=new LeaveModel;
      $result= $model->where('empPerNo',current_user()['per_no'])->find();
     return view('leave/dashboard',
      ['page'=>'employee_page',
      'data'=>$result,
      ]);
    }
    public function new()
    {
      $model=new \App\Models\LeaveModel;
      if($this->request->getMethod()==='post'){
      if($model->save($_POST)){
        return redirect()->to('newLeave')
        ->with('info','Leave Applied successfully with Refence ID.'.$_POST['referenceId'])
        ->withInput(); 
      }
      else{
        return redirect()->back()
                        ->with('errors',$model->errors())
                        ->with('warning','Invalid Data')
                        ->withInput();
          }
      }
      return view('leave/newLeave',    
      ['page'=>'employee_page',
      
      ]); 
    }

  public function show($empPerNo){
    
    if($empPerNo===current_user()['per_no']){
      $model=new LeaveModel;
      $result= $model->where('empPerNo',$empPerNo)->find();
     return view('leave/show',
      ['page'=>'employee_page',
      'data'=>$result,
      ]);

    }
    else{
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('with personal No'. $empPerNo);
    }
    
    }

  public function viewLeave($referenceId){

   $model=new LeaveModel;
   $result= $model->where('referenceId',$referenceId)->find();
   $data['page']="employee_page";

   $data['data']=$result;
   $data['first_name']=current_user()['first_name'];
   $data['last_name']=current_user()['last_name'];
   $data['designation']=current_user()['designation'];
   $data['department']=current_user()['department'];
   $data['basicPay']=current_user()['basic_pay'];
   $data['referenceId']=$referenceId;
    return view('leave/viewLeave',$data);
  }



}
<?php

namespace App\Controllers\Admin;

use \App\Models\Admin;
use \App\Models\AllocatedLeaveModel;
use App\Models\EmployeeModel;
use App\Models\LeaveModel;
use CodeIgniter\I18n\Time;

class AdminSection extends \App\Controllers\BaseController
{
    public function index()
    {
        return view(
            'AdminSection/Dashboard/dashboard', ['page' => 'admin'],
        );
    }

    public function create()
    {
        $model = new EmployeeModel;
        $data['page'] = 'admin';
        $data['data']= new \App\Entities\Employee($this->request->getPost());
        $deptModel = new \App\Models\Department;
        $desigModel = new \App\Models\DesignationsModel;
        $data['dept'] = $deptModel->allDept();
        $data['designations'] = $desigModel->allDesignations();
        if ($this->request->getMethod() === 'post') {        
            $result = $model->insert($data['data']);
            if ($result === false) {
                return redirect()->back()
                    ->with('errors', $model->errors())
                    ->with('warning', 'Invalid Data')
                    ->withInput();
            } 
            else {
                return redirect()->to('admin/AdminSection/create')
                    ->with('info', 'Emp Record Interted Successfully');
                }
            } 
        else {
            return view('AdminSection/employee/new',$data);
        }
    }

    public function showEmployee()
    {
        $model = model(EmployeeModel::class);
        $data['data'] = $model->getEmployee();
        $data['page'] = 'admin';
        return view('AdminSection/employee/show', $data);
    }
    public function edit($personalNo)
    { $model = model(EmployeeModel::class);

       $data['data']=$this->empByPersonalNo($personalNo);
        $data['page'] = 'admin';
        $deptModel = new \App\Models\Department;
        $desigModel = new \App\Models\DesignationsModel;
        $data['dept'] = $deptModel->allDept();
        $data['designations'] = $desigModel->allDesignations();
        return view('AdminSection/employee/edit', $data);
    }
    public function update($id)
    { 
        $model = model(EmployeeModel::class);
        $data= $model->find($id);
        $data = new \App\Entities\Employee();       
        $data->fill($this->request->getPost());
        if($data->hasChanged()){
            if ($model->save($data)) {
                return redirect()->to('admin/AdminSection/showEmployee')
                ->with('info', 'Emp Record Updated Successfully');
             } 
            else {  
                 return redirect()->back()
                ->with('errors', $model->errors())
                ->with('warning', 'Invalid Data')
                ->withInput();
                }
        }
    else{   return redirect()->back()->with('warning','Nothing to Update')
                                    ->withInput();
    } 

    }

    public function employeeProfile($personalNo)
    {
        $Leaves = model(AllocatedLeaveModel::class);
        $data['leaves']=$Leaves->leaveDetailByPerNo($personalNo);
       // dd($data);
        $data['data']=$this->empByPersonalNo($personalNo);
        //dd($data);
        $data['page'] = 'admin';
        return view('AdminSection/employee/employeeProfile', $data);
    }

    public function updateEmpStatus($id,$sts)
    {
        $model = model(EmployeeModel::class);
        $model->where('id', $id)->set(['status' => $sts])->update();
        return redirect()->to('admin/AdminSection/showEmployee')
        ->with('info','updated Successfully');
        }

    public function pendingLeaves()
    {
        $model = new LeaveModel;
        $data['page'] = 'admin';
        $data['data'] = $model->where('status', 'pending')->findAll();
        return view('AdminSection/Approval/pendingLeaves', $data);
    }
    public function approvependingLeaves($referenceId)
    {
        $model = new LeaveModel;
        $data['page'] = 'admin';
        $approved_at =  $time = Time::now('Asia/Kolkata', 'en_US');
        if ($model->where('referenceId', $referenceId)
            ->set([
                'status' => 'approved',
                'approved_at' => $approved_at
            ])
            ->update()
        ) {
            return redirect()->to('admin/AdminSection/pendingLeaves')
                ->with('info', "Leave Approved Successfully !");
        } else {
            return redirect()->back()
                ->with('warning', 'Unable to Approve Leave ')
                ->withInput();
        }
    }
    public function viewapprovedLeaveByPerNo()
    {

        $data['page'] = 'admin';
        $empPerNo = $this->request->getPost('empPerNo');
        $data['data'] = service('genMethods')->searchapprovedLeaveByPerNo($empPerNo, $status = 'approved');
        return view('AdminSection/Report/leavesByPerNo', $data);
    }
    public function employeeLeaveHistory($personalNo,$name=false)
    {
        $model= new LeaveModel;
        $data['page'] = 'admin';
        $data['name'] = $name;
        $data['personalNo'] = $personalNo;
        $data['data']= $model->getLeaveByPerNo($personalNo);
       // dd($data);
        return view('AdminSection/Employee/allLeaves', $data);
    }

    public function searchDeptWise($department)
    {
        $data['page'] = 'admin';
        $data['department'] = service('genMethods')->empDeptWise();
        $data['emp'] = service('genMethods')->searchEmpByDepartment($department);
        //dd($data);
        return view('AdminSection/employee/empByDept', $data);
    }

    public function addEmpLeaveAllocation($empPerNo = Null)
    {
        $model = new AllocatedLeaveModel;

        if ($this->request->getMethod() === 'post') {

            $fieldName  = 'el';
            $fieldRules = 'required|less_than_equal_to[315]';
            $model->setValidationRule($fieldName, $fieldRules);
            try {
                if ($model->save($_POST)) {
                    return redirect()->to('admin/AdminSection/empByDept')
                        ->with('info', ' Record Interted Successfully');
                } else {
                    return redirect()->back()
                        ->with('errors', $model->errors())                     
                        ->withInput();
                }
            } catch (\Exception $e) {
                exit($e->getMessage());
            }
        } else {
            $emp = service('genMethods')->getEmpByPerNo($empPerNo);
            $model=new AllocatedLeaveModel();
            $leaves=$model->leaveDetailByPerNo($empPerNo);
            
            return view('AdminSection/LeaveAllocation/addEmpLeaveAllocation', [
                'page' => 'admin',
                'emp' => $emp,
                'leaves'=>$leaves
            ]);
        }
    }

    public function empByDept()
    {
        $data['page'] = 'admin';
        $data['department'] = service('genMethods')->empDeptWise();
        $data['emp'] = service('genMethods')->getAllEmp();
        //dd($data);
        return view('AdminSection/employee/empByDept', $data);
    }
    public function empByPersonalNo($personalNo)
    {
      $model = model(EmployeeModel::class);
      $data=  $model->where('per_no',$personalNo)->first();
      if($data===null){
        return new \App\Entities\Employee();
      }
      else{
         return $data;
      }
    }


}

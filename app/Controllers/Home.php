<?php
namespace App\Controllers;

use PHPUnit\Util\Xml\Validator;

class Home extends BaseController
{
        public function index()
        {
            
            $model = model(Admin::class);
            //$data['employee'] = $model->getEmployee();
            return view('index');
        }
        public function create()
        {
            $model = model(Admin::class);
            if ($this->request->getMethod() === 'post') {
                $rules=[
                    'per_no'=>'required|min_length[3]',
                    'password'=>'required|min_length[6]',
                    'confirmpassword'=>'required|matches[password]',
                ];
                if(! $this->validate($rules)){
                    $data['validation']=$this->validator;
                    return view('admin/templates/head',$data )
                    . view('admin/addEmp')
                        . view('admin/templates/footer');
                }
                else{             
                $model->save($_POST);
                session()->setFlashdata("message", "New Emp Record Inserted successfully .");
                return redirect()->to('/addEmp');               
                }
                }         
           return view('admin/templates/header')
			. view('admin/addEmp')
              . view('admin/templates/footer');
         }		
            public function updateEmpStatus($id,$stas)
            {
                $model = model(Admin::class);
                $data['employee'] = $model->getEmployee();            
                    $model
                    ->where('per_no', $id)
                    ->set(['status' => $stas])
                    ->update();
                    session()->setFlashdata("message", "Record Updated successfully .");
                    return redirect()->to(base_url('allEmp'))->with('msg','updated Successfully');
                }
            /* Edit Employee Detail */
            public function editEmp($id)
            {
                $model = model(Admin::class);
                $data['employee'] = $model->getEmployee($id);
              
                return view('admin/templates/head', $data)
                    . view('admin/editEmp')
                    . view('admin/templates/footer');	
            }
            /* Update Employee Detail 
            
            public function update($id=0)
                {
                    $model = model(Admin::class);
                    $data['employee'] = $model->getEmployee();
                    if ($this->request->getMethod() === 'post')
                        {
                                    $_POST['id']=$id;
                                    $model->save($_POST);
                                    session()->setFlashdata("message", "Record Updated successfully .");
                                    return view('admin/templates/header',$data)
                                . view('admin/editEmp')
                                . view('admin/templates/footer');
                        }

                    return view('admin/templates/head',$data )
                    . view('admin/editEmp')
                    . view('admin/templates/footer');	 
                    }
*/
            public function delete($id=NULL)
            {
                $model = model(Admin::class);
                $data['employee'] = $model->getEmployee();
                    $model->delete($id);
                    session()->setFlashdata("message", "Record Deleted successfully .");
                    redirect($this->uri->uri_string());
                    return view('admin/templates/header',$data)
                        . view('admin/allEmp')
                        . view('admin/templates/footer');
            }            
            public function addEmp()
            {   
                return view('admin/templates/head', )
                . view('admin/addEmp')
                . view('admin/templates/footer');	            
            }

            public function viewEmp()
            {   
                $model = model(Admin::class);
                $data['employee'] = $model->getEmployee();
                return view('admin/employees',$data);
            }
	public function viewDept($page = 'home')
    {
		 if (! is_file(APPPATH . 'Views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }


        $model = model(Admin::class);
        $data['dept'] = $model->getDept();
      
		if($data['dept']){
		 return view('admin/templates/header', $data)
            . view('admin/'.$page)
            . view('admin/templates/footer');	
		}
		else
		{
			 return view('admin/templates/header', $data)
            . view('admin/'.$page)
            . view('admin/templates/footer');	
		}
    }
    public function addDept()
    {
        $model = model(Admin::class);
        if ($this->request->getMethod() === 'post') {
			if($model->saveDepartment($_POST)){
            session()->setFlashdata("message", "Record Inserted successfully .");
            return view('admin/templates/header')
			. view('admin/addDept')
              . view('admin/templates/footer');
            };
         
        }

        return view('admin/templates/header')
			. view('admin/addDept')
              . view('admin/templates/footer');
    }
    public function addLeaveType()
    {
        $model = model(Admin::class);
        if ($this->request->getMethod() === 'post') {
			if($model->saveLeaveType($_POST)){
            session()->setFlashdata("message", "Record Inserted successfully .");
            return view('admin/templates/header')
			. view('admin/addLeave')
              . view('admin/templates/footer');
            };       
        }
        return view('admin/templates/header')
			. view('admin/addLeave')
              . view('admin/templates/footer');
            }

/*** Bill /Invoice  */

    public function viewInvoices() // view all invoices
        {   
            $model = model(Admin::class);
            $data['invoices'] = $model->getinvoices();
            return view('admin/view-invoices',$data);
        }



        // Add Directory 
        public function addDirectory() // Add Directory
        {   
           
            $data['page'] = 'admin'; // Capitalize the first letter
    
            $model = model(Admin::class);
            if ($this->request->getMethod()=== 'post') {
                
               if( $model->addDirectory()) 
               { 
                session()->setFlashdata("message", "Record Updated successfully .");
                view('admin/addDirectory' ,$data);
               } }
    
            return 
    view('admin/addDirectory' ,$data);
    }
    public function applyLeave()
    {
    $model = model(BillModel::class);
    $data = $model->getCustomers();
    $row['data']=$data;
    $row['page']='bill';
    //$model = model(Admin::class);
    if ($this->request->getMethod() === 'post') {
        $model->save($_POST);  
        session()->setFlashdata('message','Record Inserted Successfully') ;      
        return view('admin/bill/bill-entry',$row);
            }
            else{return view('admin/bill/bill-entry',$row);}
    }    

}

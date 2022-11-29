<?php
namespace App\Controllers;
use App\Models\BillModel;
class Bill extends BaseController
{   public function index()
    {
        $model = model(Admin::class);
        $data['employee'] = $model->getEmployee();
        return view('admin/index');
    }
    public function dashboard($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $model = model(BillModel::class);
        $data = $model->dof();
        $data2 = $model->dof2();
        $data3 = $model->dof3();
        $data3_2 = $model->dof3_2();
        $data4 = $model->dof4();
        $row['row']=$data->getResultArray(10);
        $row['row_one']=$data2;
        $row['row_two']=$data3;
        $row['row_three']=$data4;
        $row['row_three_2']=$data3_2;
        $row['page']='dof';
        return view('admin/bill/'.$page,$row);     
    }
    public function allBills()
    {
        $model = model(BillModel::class);
        $data2 = $model->dof2();
        $row['row_one']=$data2;
        $row['page']='bill';
       // print_r($data3);
        return view('admin/bill/allBill',$row);     
    }
    public function addBill()
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

        public function editBill($id)
        {
            $model = model(BillModel::class);
            $cust = $model->getCustomers();
            $row['data'] = $model->getBill($id);    
            $row['cust']=$cust;
            $row['page']='bill';
            // echo '<pre>';
            //         print_r($row);die();
          
            return view('admin/bill/editBill',$row);	
        } 

        public function updateBill()
        {
            $model = model(BillModel::class);
            $data2 = $model->dof2();
            $row['row_one']=$data2;
            $row['page']='bill';
            if ($this->request->getMethod() === 'post') {
                $model->save($_POST);  
                session()->setFlashdata('success','Record Inserted Successfully') ;      
                return redirect()->to('allBill');
            }          
        }          
// ---------------CUSTOMERs-----------------------------------
    public function addCustomer()
    {
        $row['page']='bill';
        $model = model(BillModel::class);
        if ($this->request->getMethod() === 'post') {
            $model->saveCustomer($_POST);  
            session()->setFlashdata('message','Record Inserted Succesfully') ;      
            return view('admin/bill/addCustomer',$row);
             }
             else{
            return view('admin/bill/addCustomer',$row);
            }
        }
    public function allCustomer(){
        $data['page']='bill';
        $model = model(BillModel::class);
        $data['row']=$model->getCustomers();   
        return view('admin/bill/allCustomer',$data);
        }

        public function editCustomer($id)
        {
            $model = model(BillModel::class);
            $row['data'] = $model->getCustomers($id);    
            $row['page']='bill';
          
            return view('admin/bill/editCustomer',$row);	
        } 
        public function updateCustomer($id)
        {
            $model = model(BillModel::class);
            
            $row['page']='bill';
            if ($this->request->getMethod() === 'post') {
                $data2 = $model->updateCustomer($id);
                session()->setFlashdata('success','Record Updated Successfully') ;      
                return redirect()->to('allCustomer');
            } 
        }

// --------------------Contract--------------------------------
    public function addContract(){
        $model = model(BillModel::class);
        $data = $model->getCustomers();
        $row['data']=$data;
        $row['page']='bill';
        $model = model(BillModel::class);
        if ($this->request->getMethod() === 'post') {
            $model->saveContract($_POST);  
            session()->setFlashdata('message','Record Inserted Succesfully') ;      
            return view('admin/bill/addContract',$row);
             }
             else{
            return view('admin/bill/addContract',$row);}
        }

        public function allContract(){
            $data['page']='bill';
            $model = model(BillModel::class);
            $data['row']=$model->getContract();   
            return view('admin/bill/allContract',$data);
            } 
            
         public function editContract($id)
            {
                $model = model(Contract::class);
                $model2 = model(BillModel::class);
                $cust = $model2->getCustomers();
                $row['cust']=$cust;
                $row['data'] = $model->find($id);    
                $row['page']='bill';   
                //  print_r($row);die();    
                return view('admin/bill/editContract',$row);	
            } 
        public function updateContract($id)
            {
                $model = model(Contract::class);
                $row['page']='bill';
                if ($this->request->getMethod() === 'post') {
                    $model->update($id,$_POST);  
                    session()->setFlashdata('success','Record Updated Successfully') ;      
                    return redirect()->to('allContract');}
            } 
// --------------------End Contract--------------------------------

    public function getContractNo(){// print_r($_GET);
    $customer_id=$_GET['customer_id'];
        $db      = \Config\Database::connect();
        $builder = $db->table('contract');
        $query=$builder->select ('contract_number')
                ->distinct('contract_number')
                ->where('customer_id', $customer_id)
                -> get()->getresult();        
    $html='';
    $str='Select Contract No';
    $html='<option value="">'.$str.'</option>';
    foreach($query as $data){
        $html.='<option value='.$data->contract_number.'>'.$data->contract_number.'</option>';
    }
    echo $html;
        }
}

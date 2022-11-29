<?php 
namespace App\Controllers;
use CodeIgniter\Exceptions\AlertError;
use phpDocumentor\Reflection\DocBlock\Tags\TagWithType;
class Login extends BaseController{
    public function new(){

            return view('login/new');
          }
        public function user_check(){    
        $per_no=$this->request->getPost('login-personalNo');
        $password=$this->request->getPost('login-pwd');    

        $auth= service('auth');

        if($auth->login($per_no,$password)){

          return redirect()->to('leave/dashboard')
          ->with('info','Login Successfully');

        }  
       else{
        return redirect()->back()
        
        ->withInput()->with('warning','Please check the password');
       }     
    }
    public function delete_session(){ 
      service('auth')->logout();
      return redirect()->to('/')
                       ->with('info','LogOut Succesfully');
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\AlertError;
use phpDocumentor\Reflection\DocBlock\Tags\TagWithType;

class Users extends BaseController
{
  public function new()
  {

    return view('admin/login/new');
  }
  public function user_check()
  {
    $userName = $this->request->getPost('user-name');
    $password = $this->request->getPost('login-pwd');
    $section = $this->request->getPost('section');

    $auth = service('userAuth');

    if ($auth->login($userName, $password,$section)) {

      if($section==='admin')
      {   return redirect()->to('admin/adminsection/')
        ->with('info', 'Login Successfully');
      }
     else
      {  return redirect()->back()
        ->with('warning', 'Pl check Credentials and Section');
      
      }
      

    }
     else {
      return redirect()->back()
                      ->withInput()
                      ->with('warning', 'Please check the UserName Or assword');
    }
  }
  public function delete_session()
  {
    service('auth')->logout();
    return redirect()->to('/')
      ->with('info', 'LogOut Succesfully');
  }
}

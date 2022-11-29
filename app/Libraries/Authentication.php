<?php
namespace App\Libraries;
class Authentication{
    private $user;
    public function login($per_no,$password){
        $model=new \App\Models\Admin;
        $user=$model->findByPersonalNo($per_no);

       if($user===null){
       return false;
       }
       if(! password_verify($password,$user['password'])){
       return false;
       }

        $session=session();
        $session->regenerate();
        $session->set('user_id',$user['id']);
        return true;

    }
    public function logout(){
        session()->destroy();
    }

    public function getEmployees(){

        if(! $this->isLoggedIn())
        {
          return null;
        }
        if($this->user ===null){
              $model=new \App\Models\Admin;
              $this->user= $model->find(session()->get('user_id'));
        }

        return $this->user;
      
    }
    public function isLoggedIn(){
       return session()->has('user_id');
    }

    
}
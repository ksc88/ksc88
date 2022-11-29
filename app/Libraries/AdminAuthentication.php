<?php
namespace App\Libraries;
class AdminAuthentication{
    private $user;
    public function login($userName,$password,$section){
        $model=new \App\Models\UserModel;
        $user=$model->findByUserName($userName);

       if($user===null or $section===''){
       return false;
       }
       if(! password_verify($password,$user['password'])){
       return false;
       }

        $session=session();
        $session->regenerate();
        $session->set('user_id',$user['username']);
        return true;

    }

    public function logout(){
        session()->destroy();
    }
    public function isLoggedIn(){
       return session()->has('user_id');
    }

    
}
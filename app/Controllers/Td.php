<?php
namespace App\Controllers;
class Td extends BaseController{

    public function new(){
          
        $data['page'] = 'Bill_Section'; // Page Name
        return view('td\tdProposal',$data);
    }

}
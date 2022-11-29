<?php

namespace App\Controllers;

use CodeIgniter\Model;

class Pages extends BaseController
{
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
         }
        $data['page'] = 'dir'; // Page Name
        $model = model(Admin::class);
        $data['data'] = $model->getDirectories();        
        return  view('' . $page,$data);  
        }
 
}
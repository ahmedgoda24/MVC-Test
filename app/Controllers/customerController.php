<?php
namespace Goda\Mvc\App\Controllers;

use Goda\Mvc\App\Models\customer;
use Goda\Mvc\Src\View;

class customerController{

    public function all(){
        $customermodel=new customer;
        $data['customers']=$customermodel->getAll();
        View::render("allcustomers.php",$data);
        
    }
 

}
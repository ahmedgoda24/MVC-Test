<?php
namespace Goda\Mvc\App\Controllers;

use Goda\Mvc\App\Models\Product;
use Goda\Mvc\Src\View;

class ProductController{

    public function all(){
        $productmodel=new Product;
        $data['products']=$productmodel->getAll();
        View::render("allProducts.php",$data);
        
    }
    public function create(){
        View::render("creatProduct.php");

    }

}
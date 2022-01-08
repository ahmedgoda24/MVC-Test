<?php
namespace Goda\Mvc\App\Models;

use Goda\Mvc\Src\Model;

class Product extends Model{
     public function setTableName(){
         $this->table="products";

    }

}


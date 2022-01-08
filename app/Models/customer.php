<?php
namespace Goda\Mvc\App\Models;
use Goda\Mvc\Src\Model;
class customer extends Model{
    public function setTableName(){
        $this->table="customers";

   }

}
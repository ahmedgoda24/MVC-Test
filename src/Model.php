<?php
namespace Goda\Mvc\Src;


abstract class Model{
    protected $conn,$table,$query;
    public function __construct()
    {
        $this->con= mysqli_connect("localhost","root","","route35exp");
       $this-> setTableName();
        
    }
    public function getAll(){
        $query=  "SELECT * FROM $this->table LIMIT 5";
        $result =  mysqli_query($this->con ,$query);
        return  mysqli_fetch_all($result , MYSQLI_ASSOC);

    }
    abstract public function setTableName();

}
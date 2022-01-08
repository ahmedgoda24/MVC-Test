<?php
namespace Goda\Mvc\Src;
class Request{

    public function queryString(){
        return $_SERVER["QUERY_STRING"];
    }

    public function get(string $key=null)
    {
        return ($key==null)?$_GET:((isset($_GET[$key]))?$_GET[$key]:null);
    }
    public function post(string $key=null)
    {
        return ($key==null)?$_POST:((isset($_POST[$key]))?$_POST[$key]:null);
    }
    public function postClean(string $key)
    {
        return trim(htmlspecialchars($_POST[$key]));
    }
    public function method()
    {
        return $_SERVER["REQUEST_METHOD"];
    }
}




?>
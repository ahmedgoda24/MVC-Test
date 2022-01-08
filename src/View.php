<?php
namespace Goda\Mvc\Src;

class View{
    public static function render($fileName,$data=[]){
        $viewPath="F:/Xamp/htdocs/lec/MVC/app/Views/";
        $filePath=$viewPath.$fileName;
        if(file_exists($filePath)){
            extract($data);
            include $filePath;
        }else{
            die("File.$fileName.NotExist");
        }

    }


}
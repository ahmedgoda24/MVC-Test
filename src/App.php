<?php

namespace Goda\Mvc\Src;

class App
{
    private $request, $url, $controller, $action;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function parseUrl()
    {
        $url = $this->request->queryString();
        $urlSegments = explode("/", $url);
        $this->controller = ucfirst($urlSegments[0]) . "Controller";
        $this->action =  $urlSegments[1];
    }

    public function callaction()
    {
        $controllerWithNs = "Goda\Mvc\App\Controllers\\" . $this->controller;
        if (class_exists($controllerWithNs)) {
            $objController = new $controllerWithNs;
            if (method_exists($objController, $this->action)) {
                call_user_func([$objController, $this->action]);
            } else {
                die("method not found");
            }
        } else {
            die("class not found");
        }
        
    }
}

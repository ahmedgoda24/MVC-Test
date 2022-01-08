<?php
// echo "this is index <br>";
// echo $_SERVER["QUERY_STRING"];
require_once __DIR__.'/../vendor/autoload.php';

use Goda\Mvc\Src\App;
use Goda\Mvc\Src\Request;


$request=new Request;
$app=new App($request);
$app->parseUrl();
$app->callaction();

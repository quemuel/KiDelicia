<?php

//call the global controller
require_once 'controller/global_controller.php';
//initial new class globalController
$index = new global_controller();

//capture parameter ' v ' of the url
if(isset($_GET['v'])){
    $view=$_GET['v'];
}else{
    $view='';
};

$index->run($view);

?>

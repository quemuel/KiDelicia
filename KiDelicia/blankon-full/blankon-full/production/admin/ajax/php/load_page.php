<?php

if(!$_POST['page']) die("0");

$page = $_POST['page'];

if(file_exists('../views/'.$page.'.html')){
    echo file_get_contents('../views/'.$page.'.html');
}else{
    echo file_get_contents('../views/error/error-404.html');
}
?>

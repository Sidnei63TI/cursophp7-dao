<?php

spl_autoload_register(function($Class_name){

    $filename = "class".DIRECTORY_SEPARATOR.$Class_name.".php";

//  var_dump($Class_name.".php");

    if (file_exists(($filename))) {

        require_once($filename);

    }

});

?>
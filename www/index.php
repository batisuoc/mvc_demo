<?php

//Config file
require 'config/database.php';
require 'config/paths.php';
require 'config/constants.php';

//Auto load all library class in libs folder
function __autoload($class) {
    require LIBS.$class.".php";
}

$app = new Bootstrap();

?>
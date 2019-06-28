<?php

//Config file
require 'config.php';

//Auto load all library class in libs folder
function __autoload($class) {
    require LIBS.$class.".php";
}

$app = new Bootstrap();

?>
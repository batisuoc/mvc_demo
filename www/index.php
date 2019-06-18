<?php
//autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

//Library
require 'libs/Database.php';
require 'libs/Session.php';

require 'config/database.php';
require 'config/paths.php';

$app = new Bootstrap();

?>
<?php

require 'connect.php';
require 'core.inc.php';


if(loggedin()){
	require 'dashboard.php';
}else{
	require 'login.php';
}


?>

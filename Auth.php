<?php

require 'Class/MySql.php';
require 'Class/User.php';

$DB = new MySqlDatabase();
$DB->connect($DBHost, $DBLogin, $DBPassword, $DBName);

$User=new AuthUser($_POST['authEmail'], $_POST['authPassword']);
if ($User->getUserExist()) {
		if ($User->Role==0) {
			include('View/AdminView.php');
		} else {
			include('View/UserView.php');
		}
} else {
	include('View/404View.php');
}		


	
		
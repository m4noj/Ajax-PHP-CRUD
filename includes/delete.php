<?php require_once "class.php";
if(empty($_POST['id'])){
	echo "Not found";
	die();
} else {
	$user = new user;
	$user->delete($_POST['id']);	
}
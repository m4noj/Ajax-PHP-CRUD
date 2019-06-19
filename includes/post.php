<?php require_once "class.php";
if(!empty($_POST)){
	$user = new user;
	$user->insert($_POST['first'],$_POST['last'],$_POST['work'],$_POST['city'],$_POST['email']);
}

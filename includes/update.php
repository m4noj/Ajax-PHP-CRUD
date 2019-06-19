<?php require_once "class.php";
if(empty($_POST['id'])){
	echo "Not found";
	die();
} else {
	$user = new user;
	$user->update($_POST['first'],$_POST['last'],$_POST['work'],$_POST['city'],$_POST['email'],$_POST['id']);
}

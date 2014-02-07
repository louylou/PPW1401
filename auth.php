<?php

require_once "models/db.php";
require_once "auth/authModel.php";
require_once "auth/authView.php";
require_once "auth/CFDump.php";


$model = new authModel(MY_DSN, MY_USER, MY_PASS);
$view = new authView();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);


$contentPage = 'home'; #displays the home page content (excludes nav & footer) # was originally 'form'
$user = NULL;

session_start();

if(!empty($_SESSION['userInfo'])) {
	$contentPage = 'success';
	$user = $_SESSION['userInfo'];
}

#if the username and password exist call the model for them
if (!empty($username) && !empty($password)) { 
	
	$user = $model->getUserByNamePass($username, $password);
	
	if(is_array($user)) {
		
		$contentPage = 'success';
		$_SESSION['userInfo'] = $user;

		
	}//end if
	
}//end if

if(!empty($_SESSION['userInfo'])) {
	header('Location: index.php');
}

$view->show('header');
//CFDump::dump($_SESSION);

$view->show($contentPage, $user);
$view->show('footer');

?>



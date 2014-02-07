<?php

session_start();

if(empty($_SESSION['userInfo'])) {
	header('Location: auth.php');
}
	require_once "models/db.php";
	require_once "models/dvdModel.php";
	require_once "models/dvdView.php";
	
	$model = new dvdModel(MY_DSN, MY_USER, MY_PASS);
	$view = new dvdView(); 	#Over all class to view ALL pages
	
	$view->showHeader('DVD List'); //calling the showHeader Function #'DVD List' is the title of the page
	$view->showLatest($model->getLatestDvd()); //$rows is equaled to the argument #this would show the grouphome content
	$view->showFooter();
	

?>

<!--<?php

session_start();

if(empty($_SESSION['userInfo'])) {
	header('Location: auth.php');
}
	require_once "models/db.php";
	require_once "models/dvdModel.php";
	require_once "models/dvdView.php";
	
	$model = new dvdModel(MY_DSN, MY_USER, MY_PASS);
	$view = new dvdView(); 	#Over all class to view ALL pages
	
	$view->showHeader('DVD List'); //calling the showHeader Function #'DVD List' is the title of the page
	$view->showLatest($model->getLatestDvd()); //$rows is equaled to the argument
	$view->showFooter();
	

?>	
-->
	

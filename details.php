<!--
this is the data that shows up on whatever the user clicks on. 
such as the correct profile to whichever user was clicked on.
Or for for Calendar or Last Resort.
-->
<!-- 
you will need one of these pages for each profile and cal 
--> 

<?php

	require_once "models/db.php";
	require_once "models/dvdModel.php";
	require_once "models/dvdView.php";

	
	$model = new dvdModel(MY_DSN, MY_USER, MY_PASS);
	$view = new dvdView(); 	
	
	//calls the updateDetail function from the dvdModel.php
	if(isset($_POST['edit'])){
		$model->updateDetail($_POST['id'],$_POST['title'],$_POST['year'], $_POST['producer'], $_POST['actor']);
		$_GET['id'] = $_POST['id'];
		echo"<h4>Your changes have been saved!</h4>";
	}
	
	
	//calls the deleteDetail function from the dvdModel.php
	if(isset($_POST['delete'])){
		$model->deleteDetail($_POST['id']);
		$_GET['id'] = $_POST['id'];
	}	
	
	if(isset($_POST['add'])){
		$model->createDvd($_POST['id'],$_POST['title'],$_POST['year'], $_POST['producer'], $_POST['actor']);
		$_GET['id'] = $_POST['id'];
	}
	
	$view->showHeader('DVD List'); //calling the showHeader Function
	$view->showDetail($model->getDetail($_GET['id'])); //$rows is equaled to the argument
	$view->showFooter();
	


?>
<?php

	require 'adminDataBase.php';
	require 'textInput.php';
	$pMode = new personMode();
	$data['name'] = empty($_POST['name']) ?  "no name" : test_input($_POST['name']) ;
	$data['tel'] = empty($_POST['tel']) ?  "no name" : test_input($_POST['tel']) ;
	$data['qq'] = empty($_POST['qq']) ?  "no name" : test_input($_POST['qq']) ;
	$data['mail'] = empty($_POST['mail']) ?  "no name" : test_input($_POST['mail']) ;
	$data['skill'] = empty($_POST['skill']) ?  "no name" : test_input($_POST['skill']) ;
	$data['mes'] = empty($_POST['mes']) ?  "no name" : test_input($_POST['mes']) ;
	if($pMode -> add($data))
	{
		echo "1";	
	}
	else
		echo "0";
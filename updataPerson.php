<?php
	require 'adminDataBase.php';
	require 'textInput.php';
	$p = new personMode();
	$id = empty($_GET['id']) ? -1 : test_input($_GET['id']);
	$data = empty($_GET['data']) ? '' : test_input($_GET['data']);
	if($p ->upData($id,$data))
		echo 1;
	else
		echo 0;

<?php
	require 'newsDataBase.php';
	require 'textInput.php';
	$news = new newsMode();
	$data = '';
	$type = empty($_GET['type']) ?  "news" : test_input($_GET['type']) ;
	$data['title'] = empty($_POST['title']) ?  "no title" : test_input($_POST['title']) ;
	$data['contant'] = empty($_POST['contant']) ?  "no contant" : test_input($_POST['contant']) ;
	if($news -> add($data,$type))
	{
		echo "1";	
	}
	else
		echo "0";
<?php
	require 'newsDataBase.php';
	$news = new newsMode();
	$id = $_GET['id'];
	$type = empty($_GET['type']) ?  "news" : $_GET['type'];
	if($news ->del($id,$type))
		echo 1;
	else
		echo 0;
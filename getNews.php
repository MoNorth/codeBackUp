<?php
	require 'newsDataBase.php';
	$news = new newsMode();
	$type = $_GET['type'];
	$data = $news ->get(5,50,$type);
	echo $data;
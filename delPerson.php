<?php
	require 'adminDataBase.php';
	$pMode = new personMode();
	$id = $_GET['id'];
	if($pMode ->del($id))
		echo 1;
	else
		echo 0;

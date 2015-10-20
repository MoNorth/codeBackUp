<?php
	require 'adminDataBase.php';
	$pMode = new personMode();
	$num = $_GET['num'];
	$data = $pMode ->get($num);
	echo $data;
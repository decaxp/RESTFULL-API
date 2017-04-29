<?php
include_once 'mysql.php';
include_once 'security.php';

function postQuery($mysqli,$authkey,$daysmax){
	if ($mysqli->connect_errno) {
		echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		exit();
	}
	
	$sql = "insert into users (auth_key,daysmax) values(?,?)"; 
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param('si', $authkey,$daysmax);
	/* выполнение подготовленного запроса */
	$stmt->execute();
	$stmt->close();
	
}


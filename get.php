<?php
include_once 'mysql.php';
include_once 'security.php';

function getQuery($mysqli,$id){
	if ($mysqli->connect_errno) {
		echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		exit();
	}
	
	$sql = "select id,auth_key from users where id=?"; 
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param('i', $id);
	/* выполнение подготовленного запроса */
	$stmt->execute();
	$arr=array();
	while($res=$stmt->get_result()){
		$arr=array($row['id'],$row['auth_key']);
	}
	
	$stmt->close();
	return $arr;
	
}


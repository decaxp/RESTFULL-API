<?php
include_once 'mysql.php';
include_once 'security.php';
include_once 'post.php';

// получить HTTP method, пут и тело ззапроса

function queryError($sql,$mysqli){
    // О нет! запрос не удался.
    echo "Извините, возникла проблема в работе сайта.";
    // И снова: не делайте этого на реальном сайте, но в этом примере мы покажем,
    // как получить информацию об ошибке:
    echo "Ошибка: Наш запрос не удался и вот почему: \n";
    echo "Запрос: " . $sql . "\n";
    echo "Номер_ошибки: " . $mysqli->errno . "\n";
    echo "Ошибка: " . $mysqli->error . "\n";
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];
$requestArr = explode('/', trim($_SERVER['PHP_SELF'],'/'));
$input = json_decode(file_get_contents('php://input'),true);
$request=$requestArr[count($requestArr)-1];
$request=($requestArr[count($requestArr)-1]);

 
$apikey=test_input($_POST['apikey']);
$daysmax=test_input($_POST['daysmax']);
 
switch ($method) {
  case 'GET':
    //$sql = "select * from users ".($key?" WHERE id=$key":''); break;
  case 'PUT':
    //$sql = "update users set $set where id=$key"; break;
  case 'POST':
	postQuery($mysqli,$apikey,$daysmax);
	break;
  case 'DELETE':
    //$sql = "delete from users where id=$key"; break;
}
echo 1;


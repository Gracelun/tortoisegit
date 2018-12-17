<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/home/:id', function ($id) {
	
	require_once '../app/config.php';
	$sql = "SELECT * FROM `member_information` WHERE `member_ID` = '$id'";
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()){
		$data[] = $row;
	}

	if(isset($data)){
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($data);
	}else{
		echo "[]";
	}
});

$app->put('/home/:id', function ($id) {
	echo "UPDATE $id";
});

$app->post('/home', function () {
	echo $_POST["email"];
});


$app->run();

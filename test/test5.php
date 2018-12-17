<?php
if(isset($_GET['member_id']) && isset($_GET['name'])){
	$member_id = $_GET['member_id'];
	$name = $_GET["name"];
	echo $member_id."<br>";
	echo $name;
}else{
	echo "you lose it.";
}

?>
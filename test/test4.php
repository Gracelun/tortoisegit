<?php
function f($arr){
	$new = array();
	foreach ($arr as $key => $value) {
		$new[] = $value+10;
	}
	return $new;
}

$a =array(4,7,5,27);
print_r(f($a));
$a = f($a);
print_r("<br>");
print_r($a);




?>
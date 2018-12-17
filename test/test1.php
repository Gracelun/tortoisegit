<?php
// input = integer array
// output = String "1,2,3,4,5,6,7,8,9,10"
$arr = array(1,2,3,4,5,6,7);
function toString($arr){
	$output = "";
	for($i=0 ; $i<count($arr) ; $i++){
		$output .= $arr[$i];
		if($arr[$i] != count($arr))
		$output .= ',';
	}
	return $output;
}


print_r(toString($arr));



?>
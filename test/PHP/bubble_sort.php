<?php
function bubble_sort($array){

	$num = count($array);

	for($i = 0; $i < $num ;$i++){

		for($j = $num-1 ;$j > 0;$j--){

			if($array[$j] < $array[$j-1]){

				list($array[$j] , $array[$j-1]) = array($array[$j-1] , $array[$j]);
			}
		}
	}
	return $array;
}

$arr = array(10,9,8,7,6,5,4,3,2,1);
print_r(bubble_sort($arr));


?>
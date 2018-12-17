<?php
function bubble_sort($arr){
 $sum = count($arr);
 for($i = 0;$i < $sum;$i++){
 	for($j = $sum-1;$j>0;$j--){
 		if($arr[$j] > $arr[$j-1]){
 			$temp = $arr[$j];
 			$arr[$j] = $arr[$j-1];
 			$arr[$j-1] = $temp;
 		}
 	}
 }
 return $arr;

}


$arr = array(8,5,1,4,7,2,6,9,3,10);
print_r(bubble_sort($arr));
?>
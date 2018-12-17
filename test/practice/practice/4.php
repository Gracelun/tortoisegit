<?php
/*
說明sort() asort() ksort()的不同

sort 依value正序，key被取代
rsort 依value倒序，key被取代

asort 依value正序，key保留
arsort 依value倒序，key保留

ksort 依key正序
krsort 依key倒序

usort 自訂排序
*/

/* 範例一 */
$arr = array('p3'=>'earth', 'c3'=>'moon', 'p4'=>'mars', 'p5'=>'jupiter', 's'=>'sun', 'd'=> 'pluto');
rsort($arr);
//print_r($arr);






/* 範例二 */
$n= array('10', '9', '2', 'A', 'K', 'Q', 'J');
usort($n, 'poker_sort');
 print_r($n);

function poker_sort($a,$b){
	$order="AKQJ";
	if(intval($a)==0 && intval($b)!=0) return 1;
	if(intval($b)==0 && intval($a)!=0) return -1;
	if(intval($a)==0 && intval($b)==0){
		if(strpos($order,$a)<strpos($order,$b))return 1;
		return 0;
	}
	if($a>$b)return 1;
	return 0;
}
?>



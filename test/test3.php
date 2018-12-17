<?php

// $a =array(
// 	1=>array(1=>"A",2=>"B"), 
// 	2=>array(1=>"C",2=>"D"),
// );
$a =array(
	array("A","B","E"), 
	array("C","D"),
);


for($i = 0 ; $i < count($a) ; $i++){
	for($j = 0 ;$j <count($a[$i]) ;$j++){
		print_r($a[$i][$j]);
		echo " "; 
	}
	echo "<br>"; 
}
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 


$b =array(
	"?"=>array(1=>"A",2=>"B"), 
	"!"=>array(1=>"C",2=>"D"),
);

foreach ($b as $key => $value) {
	foreach ($value as $k => $v) {
		print($v);
		print(" ");
	}
	print("<br/>");
}
print("<br/>");






?>
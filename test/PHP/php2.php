<?php
/*
99乘法表
*/
$tableString = '<table border ="1px">';
for($i=1;$i < 10;$i++){
	$tableString .= '<tr>';
	for($j=1;$j <= $i;$j++){
		 $tableString .= '<td>'.$j.'*'.$i.'='.$i*$j.'</td>';
		 
	}
	$tableString .= '</tr>';
}
$tableString .='</table>';
echo $tableString;



?>
<?php
/*
請用PHP程式簡單列印出下面的表格
-------
|1|2|3|
|4|5|6|
|7|8|9|
-------
*/
$tableString = '<table border="1px">';
for($i=1 ; $i <10 ; $i++){

	if($i % 3 == 1) $tableString .= '<tr>';
	$tableString .= "<td>$i</td>";
	if($i % 3 == 0) $tableString .= '</tr>';

}
$tableString .='</table>';
echo $tableString;


?>
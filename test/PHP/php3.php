<?php  
/*
請用php程式列印出0,1,1,2,3,5,8,13,21,34,55的資料
*/

function f($n){
	if($n == 0 || $n == 1){
		return $n;
	}
	return f($n - 1)+f($n - 2);

}


for($i=0 ;$i <= 10 ; $i++){
	echo f($i);
	if($i != 10) echo ',';
}






?>
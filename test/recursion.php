<?php

function f($n){

	if($n == 0 || $n == 1){
		return $n;
	}
	return f($n - 1)+f($n -2);

}


for($i = 0;$i <= 10; $i++){
	echo f($i);
	if($i !- 10) echo ',';

}

?>
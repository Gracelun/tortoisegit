


<?php

	function f($n){
	
		$arr = array(0,1);


		for($i=0;$i<$n-2;$i++){
			$arr[$i+2] = $arr[$i]+$arr[$i+1];


		}
		return $arr;
	}



	print_r(f(8));




?>
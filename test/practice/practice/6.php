<?php
/*
[詳細解釋](http://php.net/manual/en/language.operators.errorcontrol.php)

	PHP中的@，叫做错误抑制运算符
	->加上@，对应所在行的代码，如果运行时候出错了，也不报错，不输出错误了
	->不加@的正常的代码，如果代码运行时候出错，会报错的。
*/
$arr = ["1", "2", "3", "4", "5"];
$val1 = @$arr[1];
$val2 = @$arr[10];
$val3 = $arr[10];
echo $val1;
echo $val2;
echo $val3;
?>
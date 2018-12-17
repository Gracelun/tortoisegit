<?php
// $str = "{abcdefg}";
// echo substr($str, 1, -1);


$nowtime = time();
echo $nowtime;
echo "<br/>";
echo substr($nowtime, 0, 4)."-".substr($nowtime, 4, 4)."-".substr($nowtime, -2).rand(10,99);





?>
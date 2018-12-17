<?php
# http://www.runoob.com/php/php-json.html
$str = '[{"merchandise_id":"5","count":36},{"merchandise_id":"1","count":1},{"merchandise_id":"3","count":3}]';
$data = json_decode($str);

foreach ($data as $key => $value) {
	print_r($value->merchandise_id);
	print_r("/");
	print_r($value->count);
	print_r("<br/>");
}


?>
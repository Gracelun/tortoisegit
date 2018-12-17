<table style="width:100%">
	<?php 
	$input = array(11,22,33,44,55,66,77,88,99);
	
	for($i = 0;$i < count($input);$i+=3){
		?>
		<tr>
			<th><?=$input[$i]?></th>
			<th><?=$input[$i+1]?></th>
			<th><?=$input[$i+2]?></th>
		</tr>
		<?php
	}
	?>
</table>

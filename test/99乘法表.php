<table style="width:100%">
	
	<?php
	for($i=1;$i<10;$i++){
		?>
		<tr>
			<?php
			for($j=1;$j<=$i;$j++){
				?>

				<td><?=$j.'*'.$i.'='.$i*$j?></td>
				<?php
			}
			echo '<br>';
			?>
		</tr>
		<?php
	}
	?>
	
</table>

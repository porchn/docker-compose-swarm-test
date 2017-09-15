<div>
	<p>
		<b>apache is work...</b>
		<?php
			echo"<p> <b>Environment</b> : ",$_SERVER['CI_ENV'],$_SERVER['SERVER_ADDR'],"</p>";
		?>
	</p>

	<p>
	<?php
		phpinfo();
	?>
	</p>
</div>
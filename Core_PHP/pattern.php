<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
		table tr th,td {
			padding: 10px;
		}
	</style>
</head>
<body>
	<table border="1" width="100%" style="border-collapse:collapse;">
		<?php 

			for ($i=1; $i <= 8; $i++) { 
				?>
				<tr>
					<?php 
						for ($j=1; $j <= 8; $j++) { 
							$sum = $i + $j;
							if ($sum%2==0) {
								?>
									<td style="height: 80px; background-color: white;"></td>
								<?php
							} else {
								?>
									<td style="height: 80px; background-color: black;"></td>
								<?php
							}
							?>
								
							<?php
						}

					?>
				</tr>
				<?php
			}

		?>
	</table>
</body>
</html>
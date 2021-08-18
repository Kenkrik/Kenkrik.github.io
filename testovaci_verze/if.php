<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>If</title>
</head>



<body>


			
	<?php

		$x = 10;
		$y = 15;
		
		if ($x == $y)
		{
		$color = "green";
		$objekt = "čtverce";
		$obvod = $x*4;
		$obsah = $x*$x;
		}
		else
		{
		$color = "blue";
		$objekt = "obdelníku";
		$obvod = (2*($x+$y));
		$obsah = $x*$y;
		}

		if ($obvod > $obsah)
		{
			$vetsi = "Obvod";
			$mensi = "obsah";
		}
		else if ($obvod == $obsah)
		{
			$vetsi = "Obsah";
			$mensi = "obvod";	
		}
		else
		{
			$vetsi = "Obsah";
			$mensi = "obvod";	
		}


	?>

<!--<h1>Pro hezci a komplexnejsi verzi bezte <a href="http://gtr.wz.cz/6G/mrakotaj/if_custom.php">sem</a></h1>
-->
	<table style="text-align: center; margin:auto;">
		<tr>
			<td style=" width:<?php echo($x*20); ?>px; height:<?php echo($y*20); ?>px; background-color:<?php echo($color); ?>; "></td>
			<td><?php echo($y); ?></td>
		</tr>
		<tr>
			<td><?php echo($x); ?></td>
		</tr>
	</table>
	<div style="text-align:center;  max-width: 40%; border:3px solid #f1f1f1; border-radius: 7px; margin: 20px auto; padding:20px;">
		<p><b>Šířka</b> <span style='color:<?php echo ($color); ?>'><?php echo ($objekt)?></span> je: <b><?php echo ($x*20); ?>px</b></p>	
		<p><b>Výška</b> <span style='color:<?php echo ($color); ?>'><?php echo ($objekt)?></span> je: <b><?php echo ($y*20); ?>px</b></p>		
		<p><b>Obvod</b> <span style='color:<?php echo ($color); ?>'><?php echo ($objekt)?></span> je: <b><?php echo ($obvod); ?></b></p>
		<p><b>Obsah</b> <span style='color:<?php echo ($color); ?>'><?php echo ($objekt)?></span> je: <b><?php echo ($obsah); ?></b></p>
		<p>
			<?php 
				if ($obvod > $obsah)
				{
					echo ("<b>Obvod</b> je <span style='color:red;'>větší</span> než <b>obsah</b> (".$obvod." > ".$obsah.")");
				}
				else if ($obvod == $obsah)
				{
					echo ("<b>Obvod</b> se <span style='color:red;'>rovná</span> <b>obsahu</b> (".$obvod." = ".$obsah.")");	
				}
				else
				{
					echo ("<b>Obvod</b> je <span style='color:red;'>menší</span> než <b>obsah</b> (".$obvod." < ".$obsah.")");	
				}
			
			?>
		</p>
		<a href="http://gtr.wz.cz/6G/mrakotaj/if_custom.php" style="text-decoration:none; color:black; background-color:#f1f1f1; padding:10px; border-radius: 7px; display: block;">Lepší verze na mém Webu</a>
	</div>


</body>
</html>
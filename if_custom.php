<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>If</title>
</head>
<body>


<?php include 'navbar.php';?>



<div class="main">



	<div style="border:3px solid #f1f1f1 ; margin:auto; border-radius: 7px; text-align: center; margin-bottom: 30px; width:40%; max-width: 742px;">
			
			<!--kalkulacka-->		
			
			<form method="GET" style="padding:20px;">

				<fieldset  class="dotaznik_fieldset" style="width: 80%;">
					<input type="number" class="dotaznik_text"  placeholder="X - šířka" name="x"><br>
					<input type="number" class="dotaznik_text"  placeholder="Y - výška" name="y"><br>
				</fieldset>

				<fieldset class="dotaznik_fieldset">
					<button type="submit" class="odeslat_dotaznik" name="odeslat">Zobrazit</button>
				</fieldset>






			</form>				
	</div>

<!--phpčko-->


	<?php

		if (isset($_GET["odeslat"]))
		{
			$x = $_GET["x"];
			$y = $_GET["y"];

			$obvod = $obsah = $objekt = "";
		
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

		}
		else 
		{
			echo ("<p style='text-align:center;'>Příklad</p>");

			$x = 10;
			$y = 10;
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
		}

	?>






<!--<h1>Pro hezci a komplexnejsi verzi bezte <a href="http://gtr.wz.cz/6G/mrakotaj/if_custom.php">sem</a></h1>
-->
	<table style="text-align: center; margin:auto;">
		<tr style="text-align:center;">
			<td style="width:20px;"></td>	
			<td style=" width:<?php echo($x*20); ?>px; height:<?php echo($y*20); ?>px; background-color:<?php echo($color); ?>; "></td>
			<td style="width:20px;"><?php echo($y); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><div style="width:<?php echo($x*20); ?>px; height:50px; display:block; "><?php echo($x); ?></div></td>
			<td></td>
		</tr>
	</table>
	<div style="border:3px solid #f1f1f1 ; margin:auto; border-radius: 7px; text-align: center; margin-bottom: 30px; width:40%; max-width: 742px;">
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
	</div>
	
	
</div>










<div class="footer">
	<a href="https://myanimelist.net/profile/Kenkrik" style="text-decoration: none; margin-top: 10px;padding:0;display: block;"><img src="images/MAL.jpeg" style="width:30px;border-radius: 50%;padding:0; "></a>
	<p style="margin-top:10px;">© Jakub Mrákota 2021</p>
</div>


</body>
</html>
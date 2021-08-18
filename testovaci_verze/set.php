<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<title>Calculator</title>
</head>
<body>


<?php include 'navbar.php';?>



<div class="main">

		<div style="border:3px solid #f1f1f1 ; margin:auto; border-radius: 7px; text-align: center; margin-bottom: 30px; width:80%; max-width: 742px;">
			
			<!--kalkulacka-->		
			
			<h2 class="heading_bold" style="margin:-1px;  text-align: center; ">Kalkulačka</h2>	
			
			<form method="GET">

				<fieldset  class="dotaznik_fieldset">
					<input type="number" class="dotaznik_text"  placeholder="X" name="x"><br>
	
					<select class="dotaznik_text" id="operace" name="operace">
						<option value="neplatne">Operace</option>
						<option value="Součet">+</option>
						<option value="Rozdíl">-</option>
						<option value="Násobek">*</option>
						<option value="Podíl">/</option>
						<option value="Zbytek">Zbytek</option>
					</select>
					<input type="number" class="dotaznik_text"  placeholder="Y" name="y"><br>
				</fieldset>

				<fieldset  class="dotaznik_fieldset" style="text-align:center; color: #484848;">
					
					<?php

						if(isset($_GET["calc"]))
						{
							$x = $_GET["x"];
							$y = $_GET["y"];
							$operace = $_GET["operace"];
							if($x > 9999999999 || $y > 9999999999) //kontrola moc velkeho cisla
							{
								echo ("Prosím zadejte číslo menší než 9.999.999.999 :)");
							}
							else
							{

								if ($operace == "neplatne")
								{

								}
								else if($operace == "Součet")
								{
									$vysledek = $x + $y;
									echo ("".$operace." čísel ".$x." a ".$y." je: ".$vysledek."");	
								}
								else if ($operace == "Rozdíl")
								{
									$vysledek = $x - $y;
									echo ("".$operace." čísel ".$x." a ".$y." je: ".$vysledek."");		
								}
								else if ($operace == "Násobek")
								{
									$vysledek = $x * $y;
									echo ("".$operace." čísel ".$x." a ".$y." je: ".$vysledek."");		
								}
								else if ($operace == "Podíl")
								{
									$vysledek = $x / $y;
									echo ("".$operace." čísel ".$x." a ".$y." je: ".$vysledek."");		
								}
								else if ($operace == "Zbytek")
								{
									$vysledek = $x % $y;
									echo ("".$operace." při dělení čísla ".$x." číslem ".$y." je: ".$vysledek."");		
								}
								else 
								{

								}


							}
						}

						else 
						{
						}
					?>

				</fieldset>

				<fieldset class="dotaznik_fieldset">
					<button type="submit" class="odeslat_dotaznik" name="calc">Vypočítat</button>
				</fieldset>

			</form>
			
			<h2 class="heading_bold" style="margin:-1px;  text-align: center; ">Násobky</h2>		
			
			<form method="GET">

				<fieldset class="dotaznik_fieldset">
					<input type="number" class="dotaznik_text" placeholder="Číslo" name="nasobek"><br>
				</fieldset>
				
				<fieldset class="dotaznik_fieldset">
					<?php
						if(isset($_GET["rada"]))
						{
							$vysledek = $nasobek = $_GET["nasobek"];

							if($vysledek > 9999999999) //kontrola moc velkeho cisla
							{
								echo ("Prosím zadejte číslo menší než 9.999.999.999 :)");
							}
							else
							{
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
								echo ("".$vysledek." ");
								$vysledek += $nasobek;
							}
							
							
						}	
					?>
				</fieldset>

				<fieldset class="dotaznik_fieldset">
					<button type="submit" class="odeslat_dotaznik" name="rada">Vypočítat</button>
				</fieldset>

			</form>
		



		</div>
		





</div>










<div class="footer">
	<a href="https://myanimelist.net/profile/Kenkrik" style="text-decoration: none; margin-top: 10px;padding:0;display: block;"><img src="images/MAL.jpeg" style="width:30px;border-radius: 50%;padding:0; "></a>
	<p style="margin-top:10px;">© Jakub Mrákota 2021</p>
</div>


</body>
</html>
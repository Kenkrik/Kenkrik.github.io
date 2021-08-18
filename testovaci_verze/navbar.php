<?php
//toto je skript pro navigacni menu

$active = basename($_SERVER["SCRIPT_FILENAME"]); //ziska nazev stavajiciho souboru

$index = $nes = $snes = $info = $set = $if_custom = "";

//zapisani class=active pro konkretni stranku
if($active == "index.php")
{
	$index = "active";
}
else if($active == "nes.php")
{
	$nes = "active";
}
else if($active == "snes.php")
{
	$snes = "active";
}
else if($active == "info.php")
{
	$info = "active";
}
else if($active == "set.php")
{
	$set = "active";
}
else if($active == "if_custom.php")
{
	$if_custom = "active";
}

?>

<ul class="navbar">
	<li class="navbar_img"><a style="padding:0;margin:0;" href="index.php"><img height="30px" style="padding:10px;margin:0;" src="images/nintendo_logo.png"></a></li>	
	<li class="navbar_img_mobile" ><img width="100%" src="images/nintendo_logo.png"></li>
	<li><a class="<?php echo($index);?>" href="index.php">Home</a></li>
	<li><a class="<?php echo($nes);?>" href="nes.php">NES</a></li>
	<li><a class="<?php echo($snes);?>" href="snes.php">SNES</a></li>
	<li><a class="<?php echo($info);?>" href="info.php">Info</a></li>	
	<li><a class="<?php echo($set);?>" href="set.php">Kalkulačka</a></li>
	<li><a class="<?php echo($if_custom);?>" href="if_custom.php">If</a></li>
	<li><a href="https://youtu.be/dQw4w9WgXcQ">Secret</a></li>
</ul>

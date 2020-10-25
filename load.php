<?php 
$file = "markdown/". $_GET["file"].".md";

if((file_exists($file)) && ($_GET["file"])){
	echo file_get_contents($file);
}
else
{
	echo "";
}


 ?>
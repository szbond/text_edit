
<?php

$artl = $_POST["text"];

$filename = $_POST["title"]? ($_POST["title"]. ".md"):"test.md";
$file = fopen("markdown/" . $filename , "w");
fwrite($file,$artl);
fclose($file);
?>
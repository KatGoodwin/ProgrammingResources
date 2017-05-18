<?php 
$head = $_SERVER['DOCUMENT_ROOT'] . "/head.php";
require($head)?>

<h3>Stuff to help you learn PHP will go here</h3>
<ul>
<?php
$files = scandir(".");
foreach($files as $file){
	
	echo "<li><a href='http://www.katgoodwin.net/LearnPHP/$file'>$file</a></li>";
}?>
</ul>
<?php include "../foot.html"?>


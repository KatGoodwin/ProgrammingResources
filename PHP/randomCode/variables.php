<?php
 //we have created a load of variables to store our changeable text in, but this could be fetched from a database or generated using some calculations


$myTitle = "A sample PHP page";
$myAge = 55;

$myHeading = "Demonstrating variables in PHP";
$paragraphs = array(
	"This shows us how we can include information from PHP in our HTML files", 
	"We need to remember that each PHP line needs to end in a semi colon", 
	"Variables start with a dollar sign");
?>

<HTML>
<HEAD><TITLE><?php echo($myTitle)?></TITLE>
<BODY>
<H1><?php echo($newVariable)?></H1>
<?php
foreach($paragraphs as $p){
	echo("<p> $p </p>");
}
?>
</BODY>
</HTML>

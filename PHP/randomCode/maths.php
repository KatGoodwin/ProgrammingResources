<?php

$myTitle = "A sample PHP page";
$num1 = 10;
$num2 = 4;


$myHeading = "Demonstrating mathematical operators in PHP";
?>

<HTML>
<HEAD><TITLE><?php echo($myTitle)?></TITLE>
<BODY>
<H1><?php echo($myHeading)?></H1>
<p><?php echo "$num1 and $num2 = " , 		$num1 + $num2	;?></p>
<p><?php echo "$num1 times $num2 = " , 		$num1 * $num2	;?></p>
<p><?php echo "$num1 minus $num2 = " , 		$num1 - $num2	;?></p>
<p><?php echo "$num1 divided by $num2 = " , 	$num1 / $num2	;	?></p>
</BODY>
</HTML>

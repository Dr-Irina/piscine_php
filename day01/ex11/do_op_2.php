#!/usr/bin/env php
<?php
if (isset($argv) && isset($argv[1])) 
{
	if (preg_match("/^ *(-?[0-9]+) *([\+\-\*\/\%]) *(-?[0-9]+) *$/", $argv[1], $match))
	{
		$num1 = (int)trim($match[1]);
		$znak = trim($match[2]);
		$num2 = (int)trim($match[3]);
		if ($znak == "+")
			echo ($num1 + $num2);
		else if  ($znak == "-")
			echo ($num1 - $num2);
		else if  ($znak == "*")
			echo ($num1 * $num2);
		else if  ($znak == "/")
			echo ($num1 / $num2);
		else if  ($znak == "%")
			echo ($num1 % $num2);
		else
			echo ("Syntax Error");
	}
	else
		echo ("Syntax Error");
}
else
	echo ("Syntax Error");
echo ("\n");
?>

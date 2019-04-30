#!/usr/bin/env php
<?php
$str = trim(preg_replace("/\s{2,}/"," ",$argv[1]));
$words = explode(" ", $str);
for ($i = 1; $i < count($words); $i++)
	echo($words[$i].' ');
echo ($words[0]);
?>

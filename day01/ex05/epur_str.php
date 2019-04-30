#!/usr/bin/env php
<?php
$str = $argv[1];	
$str= trim(preg_replace("/\s{2,}/"," ",$str));
echo("$str\n");
?>

#!/usr/bin/env php
<?
$str = $argv[1];
$str= trim(preg_replace("/[\s\t]+/"," ",$str));
echo("$str\n");
?>

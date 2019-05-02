#!/usr/bin/php
<?php
function to_up($arr)
{
    return strtoupper($arr[0]);
}
function to_upper($arr)
{
    $arr[0] = preg_replace_callback("#>.*?(<|</)#s", 'to_up', $arr[0]);
    $arr[0] = preg_replace_callback("/(?<=title=\")[^\"]*/", 'to_up', $arr[0]);
    return $arr[0];
}

if ($argc != 2)
    exit();
$html = file_get_contents($argv[1]);
$regexp = "#<a[^>]*>.*?</a>#s";
$html = preg_replace_callback($regexp, 'to_upper', $html);
echo $html;
?>
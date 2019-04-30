#!/usr/bin/env php
<?php
function ft_split($str)
{
	$word = explode(" ", $str);
	$sort_word = array_values(array_filter($word));
	return ($sort_word);
}

if ($argc > 1)
{
	$my_arr = array();
	for ($i = 1; $i < count($argv); $i++)
	{
		$str= trim(preg_replace("/\s{2,}/"," ",$argv[$i]));
		$del_space = ft_split($str);
		for ($j = 0; $j < count($del_space); $j++)
			$word = array_push($my_arr, $del_space[$j]);
	}
	sort($my_arr);
	for ($i = 0; $i < count($my_arr); $i++)
		echo ($my_arr[$i]."\n");
}
?>

#!/usr/bin/env php
<?php
function ft_split($str)
{
	$word = explode(" ", $str);
	$sort_word = array_values(array_filter($word));
	return ($sort_word);
}

function custom_sort($i, $j)
{
	if (ctype_alpha($i[0]) && ctyle_alpha($j[1]))
		return (strcasecmp($i, $j));
	if (ctype_digit($i[0]) && ctype_digit($b[0]))
		return ($i > $b ? 1 : ($i == $j ? 0 : -1));
	return ($ret < 0 ? 1 : ($ret == 0 ? 0 : -1));
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
	usort($my_arr, "custom_sort");
	for ($i = 0; $i < count($my_arr); $i++)
		echo ($my_arr[$i]."\n");
}
?>

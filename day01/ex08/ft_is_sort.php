#!/usr/bin/env php

<?php
function ft_is_sort($tab)
{
	$temp = $tab;
	sort($tab);
	for ($i = 0; $i < count($tab); $i++)
	{
		if (strcmp($tab[$i],$temp[$i]) != 0)
			return	(FALSE);
	}
		return (TRUE);
}
?>

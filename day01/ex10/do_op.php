#!/usr/bin/env php
<?
	if ($argc == 4)
	{
		if ($argv[2] == '+')
			echo($argv[1] + $argv[3]."\n");
		if ($argv[2] == '-')
			    echo($argv[1] - $argv[3]."\n");
		if ($argv[2] == '*')
	             echo($argv[1] * $argv[3]."\n");
		if ($argv[2] == '/')
				   echo($argv[1] / $argv[3]."\n");
		if ($argv[2] == '%')
			     echo($argv[1] % $argv[3]."\n");
	}

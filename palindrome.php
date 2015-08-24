<?php

$input = isset($argv[1]) ? $argv[1] : die("No input given\n");

$reverse = strrev($input);

if ($reverse === $input) {
	die("YES\n");
}
echo "NO\n";



<?php

$input = isset($argv[1]) ? $argv[1] : die("No input given\n");

/**
 If $input is divisable by 3 output 'Fizz'
 If $input is divisable by 5 output 'Buzz'
 If $input is divisable by both 3 and 5 output 'FizzBuzz'
*/

if($input % 3 === 0 && $input % 5 !== 0) {
   die("Fizz\n");
}
if($input % 5 === 0 && $input % 3 !== 0) {
    die("Buzz\n");
}
if($input % 3 === 0 && $input % 5 === 0) {
    die("FizzBuzz\n");
}
echo "input is not divisible by either 3 or 5\n";


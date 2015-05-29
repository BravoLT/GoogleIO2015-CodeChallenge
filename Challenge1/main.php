<?php
    /**
	 * Challenge #1. 
	 * Rodney Fulk
	 *
	 * Program counts from 1 to 100 and prints out the numbers replacing those divisible by 3 with Fizz
	 * replace those divisible by 5 with Buzz and those divisible by both with FizzBuzz
	 */
	# Loads function we need
	require_once ('functions.php');
	
	# Steps through 1 - 100
	for ($i=1; $i<=100; $i++) {
		print (check_and_print($i)) . "\n";
	}
?>
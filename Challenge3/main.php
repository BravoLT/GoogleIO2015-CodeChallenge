<?php
    /**
	 * Challenge #3. 
	 * Rodney Fulk
	 *
	 * Program counts repeats of names and lists final counts top ten from most to least.
	 */
	# Loads function we need
	require_once ('functions.php');
	#Parse Arguments
	parse_str(implode('&', array_slice($argv, 1)), $_GET);
	# Load string from file
	$words = load($argv[1]);
	# $names will be null if there is no file or will have a list of names if the file is good.
	if (is_null($words)) {
		print "File Does not Exist!";
	} else {
		$words = splitEm($words);
		Print "The longest Palindrome in this file is '".$longestStr."' and it is ".$longest." characters long.";
	}
?>
<?php
    /**
	 * Challenge #2. 
	 * Rodney Fulk
	 *
	 * Program counts repeats of names and lists final counts top ten from most to least.
	 */
	# Loads function we need
	require_once ('functions.php');
	parse_str(implode('&', array_slice($argv, 1)), $_GET);
	
	# Load string from file
	$names = load($argv[1]);
	# $names will be null if there is no file or will have a list of names if the file is good.
	if (is_null($names)) {
		print "File Does not Exist!";
	} else {
	    $nameCounts = countNames($names);
		printNames($nameCounts);
	}
	
	
?>
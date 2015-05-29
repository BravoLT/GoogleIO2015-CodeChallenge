<?php 
    /**
	 * Challenge #2. 
	 * Rodney Fulk
	 * Challenge Was harder than I expected
     */
	 
	
	require_once ("CountName.php");
	
	/**
	 * 
	 * Loads text file into an array of strings. Ditches any non alphanumerics.
	 *
	 * @var - $i is the file name
	 * @return - will return null if there is no file or an array if it loads.
	 */
	function load($i) 
	{
	    if (!file_exists($i)) {
			return NULL;
		}
		$file_handle = fopen($i, "r");
		while (!feof($file_handle)) {
			$line = fgets($file_handle);
			$line = preg_replace( "/[^a-z0-9 ]/i", "", $line ); # Strip any non alphanumerics
			$names[] = $line;
		}
		fclose($file_handle);
		return $names;
	}
	
	/**
	 *
	 * Checks to see if name is in the list that was passed.
	 * @var $names - list of names in a string array
	 * @var $name - name looking for
	 * @return - returns the position of the name or -1 if not found.
	 */
	function isNameInList ($names, $name) {
		for ($i = 0; $i <= sizeof($names) -1; $i++) {
			if ($names[$i]->cmp_Name($name)){
				return $i;
			} 
		}
		return -1;
	}
	
	/**
	 *
	 * Function counts the number of times a name is duplicated.
	 * local variable $countName is a temporary variable used to setup record for $count[] that gets passed back.
	 * 
	 *
	 * @var $names - list of names to check
	 * @return - returns a new object containing object that has names and their count in it.
	 */
	function countNames($names) {
		$size =  sizeof($names);
		for ($i = 0; $i< $size-1; $i++) {
			if (isset($count)) {
				$x = isNameInList($count, $names[$i]);
				if ($x == -1) {
					$countName = new CountName();
					$countName->set_Name($names[$i]);
					$count[] = $countName;

				}
			} else {
				$countName = new CountName();
				$countName->set_Name($names[$i]);
				$count[] = $countName;
				
			} 
			
		}
		return $count;
	}
	
	/**
	 *
	 * Function sets up the compare function for usort to sort our array of objects.
	 *
	 * @var $a - First variable to check
	 * @var $b - Second variable to check first against
	 * @return - returns -1, 0 or 1 depending on how they compare. Compatible with usort compares.
	 *
	 */
	function sort_names($a, $b) {
		if($a->get_Cnt() == $b->get_Cnt()){ return 0 ; }
		return ($a->get_Cnt() > $b->get_Cnt()) ? -1 : 1;
	}

	/**
	 * 
	 * Prints out the top 10 list of names.
	 *
	 * @var - list of names to print.
	 *
	 */
	function printNames($names) {
		$size =  sizeof($names);
		if ($size >10) $size = 10;
		usort($names, 'sort_names');
		for ($i = 0; $i< $size; $i++) {
			print $names[$i]->get_Name() . " - ". $names[$i]->get_Cnt().  PHP_EOL ;
		}
	}
?>
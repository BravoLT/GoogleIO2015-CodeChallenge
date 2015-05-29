<?php 
    /**
	 * Challenge #1. 
	 * Rodney Fulk
	 *
     */
	 
	/**
	 * This function calculates then returns the proper value.
	 * @var int $i value to check if divisible by 3 or 5
	 * @return returns value that was calculated.
	 */
	function check_and_print($i) 
	{
		# Checks if divisible by 3 and 5 first. 
		if ((($i % 3)==0) && (($i % 5) ==0)) {
			return "FizzBuzz";
		}
		# Checks if divisible by 3
		if (($i % 3)==0) {
			return "Fizz";
		}
		# #Checks if divisible by 5
		if (($i % 5) ==0 ) {
			return "Buzz";
		}
		#If not divisible by 3 or 5 then return the original number. 
		return $i;
	} 
?>
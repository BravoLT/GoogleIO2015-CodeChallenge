<?php 
    /**
	 * Challenge #3. 
	 * Rodney Fulk
     */

	 #stores longest length
	 $longest = 1;
	 #stores string that is longest
	 $longestStr = "";
	 
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
			$words[] = $line;
		}
		fclose($file_handle);
		return $words;
	}
	
	/**
	 *
	 * Rodney Fulk
	 * This function checks if the word is longer than the longest Palindrome 
	 * then checks if it is one.
	 *
	 * @var $word - word to be checked
	 * @return - returns true if it 
	 */
	function checkForPalindrome($word) {
		GLOBAL $longest, $longestStr;
		$len = strlen($word) -1;
		$word = strtolower($word);
		if ($len<= $longest || $len < 2) return false;
		for ($i=0; $i < (.5*$len); $i++) {
		   $char1 = substr( $word, $i, 1 );
		   $char2 = substr( $word, ($len - $i), 1 );
		   if ($char1 != $char2) return;
		}
		$longest = $len +1;
		$longestStr = $word;
	}
	/**
	 *
	 * This function splits the lines that were loaded up from the file into separate words.
	 *
	 * @var $words - one line of words 
     *
	 */
	 
	function splitEm($words) {
		$temp = NULL;
		$size = sizeof($words);
		for ($i=0; $i < $size ; $i++) {
			$temp = preg_split('/[^a-z0-9]/i', $words[$i]);
			for ($n=0; $n < sizeof($temp); $n++) {
				checkForPalindrome ($temp[$n]);
			}
		}
	}
?>
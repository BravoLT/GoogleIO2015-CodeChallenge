<?php
$filename = $argv[1];

// We could to a lot of tests for the file (existence, permissions, content...)
// ...but let's not go crazy here

$handle = fopen($filename, "r");
if ($handle) {
  $original = fread($handle, filesize($filename));

  // Make sure we have only alpha numeric characters
  $original = preg_replace('/[^A-Za-z0-9]/', '', $original);

  // Make everything lowercase
  $original = strtolower($original);

  // Create the reversed string
  $reversed = strrev($original);

  // This will be our longest palindrome
  $palindrome = "";

  // Loop through all substrings of the reversed string
  $length = strlen($reversed);
  for($i=0; $i<$length; $i++){
    for($j=$i; $j<$length; $j++){
      $tmp = substr($reversed, $i, ($j - $i) + 1);
      if (strpos($original,$tmp) !== false) {
        //Found a palindrome, let's see if it's the longest one
        if (strlen($tmp) > strlen($palindrome)) {
          $palindrome = $tmp;
        }
      }
    }
  }
  echo ( "The longest palindrome has ".strlen($palindrome)." characters:\n" );
  echo ( $palindrome ."\n");

}
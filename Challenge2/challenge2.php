<?php
$filename = $argv[1];

// We could to a lot of test on the file (existence, permissions, content...)
// ...but let's not go crazy here

$handle = fopen($filename, "r");
if ($handle) {
  // Read the file
  $nameArray = array();
  while (($name = fgets($handle)) !== false) {
    $nameArray[$name] += 1;
  }
  fclose($handle);

  // Sort the array
  arsort($nameArray);

  // Get only the top ten names
  $topTen = array_slice($nameArray, 0, 10);

  foreach ($topTen as $key => $count) {
    echo (trim($key) . ' - ' . $count . ' ');
  }

  // Finish it up with a newline, just to make it readable
  echo ("\n");

}
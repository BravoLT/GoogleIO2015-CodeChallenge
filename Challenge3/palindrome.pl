#!/usr/bin/perl

local $/;
open(IN, $ARGV[0]);
$str = <IN>;
close(IN);
$str =~ s/\W+//g;
$str = lc($str);
$matchedBegin = 0;
$matchedEnd = 0;
for ($i = 0; $i < length($str) / 2; $i++) {
  $c = substr($str, $i, 1);
  for ($j = index($str, $c, $i + 1); $j < length($str) && $j != -1; $j = index($str, $c, $j + 1)) {
    $ia = $i;
    $ja = $j;
    while ($ia < $ja) {
      if (substr($str, $ia, 1) ne substr($str, $ja, 1)) {
        last;
      }
      $ia++;
      $ja--;
    }
    if ($ia >= $ja) { # match!
      if ($j - $i > ($matchedEnd - $matchedBegin)) {
        $matchedBegin = $i;
        $matchedEnd = $j;
      }
    }
  }
}
$length = $matchedEnd - $matchedBegin + 1;
print "Biggest match is $length characters long:\n";
print substr($str, $matchedBegin, $length) . "\n";

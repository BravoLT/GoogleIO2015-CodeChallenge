<?php
for ($i = 1; $i <= 100 ; $i++) {

  $mod3 = $i % 3;
  $mod5 = $i % 5;

  if ($mod3 == 0 && $mod5 == 0) {
    echo ('FizzBuzz');
  } elseif ($mod3 == 0) {
    echo ('Fizz');
  } elseif ($mod5 == 0) {
    echo ('Buzz');
  } else {
    echo ($i);
  }
  echo ("\n");
}

#!/bin/bash

for i in {1..100}; do
  [[ $(($i % 3)) == 0 ]] && echo -n Fizz
  [[ $(($i % 5)) == 0 ]] && echo -n Buzz
  [[ $(($i % 3)) != 0 && $(($i % 5)) != 0 ]] && echo -n $i
  echo
done

#!/bin/sh
n=1
while expr $n '<' 101 >/dev/null; do
        w=false;
        expr $n % 3 = 0 >/dev/null && { printf Fizz; w=true; };
        expr $n % 5 = 0 >/dev/null && { printf Buzz; w=true; }; 
        if $w; then
                echo;
        else
                echo $n;
        fi
        n=`expr $n + 1`;
done

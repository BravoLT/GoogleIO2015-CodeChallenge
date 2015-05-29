/*
 * Create by Addison Webb
 * 5/29/15
 */
#include <stdio.h>
 
int main() {
    for (int i = 1; i < 101; i++) {
                if (i % 3 == 0 && i % 5 == 0) {
                    NSLog(@"FizzBuzz");
                } else if (i % 3 == 0) {
                    NSLog(@"Fizz");
                } else if (i % 5 == 0) {
                    NSLog(@"Buzz");
                } else {
                    NSLog(@"%d", i);
                }

        }
}
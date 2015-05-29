package com.company;

public class Main {

    public static void main(String[] args) {
        for (int num = 0; num <= 100; num++) {

            System.out.println(process(num));
        }
    }

    public static String process(int num) {

        if (num == 0) {
            return String.valueOf(num);
        }
        else if (num % 3 == 0 && num % 5 == 0) {
            return "FizzBuzz";
        } else if (num % 3 == 0) {
            return "Fizz";
        } else if (num % 5 == 0) {
            return "Buzz";
        } else {
            return String.valueOf(num);
        }
    }
}
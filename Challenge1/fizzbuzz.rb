args = []

ARGV.each_with_index do|a,i|
  args[i] = a
end

def fizzbuzz(number)
    divisibleBy3 = (number % 3 == 0)
    divisibleBy5 = (number % 5 == 0)

    case
        when divisibleBy3 && divisibleBy5
            puts "FizzBuzz"
        when divisibleBy3
            puts "Fizz"
        when divisibleBy5
            puts "Buzz"
        else
            puts number
    end
end

startNbr = args[0].to_i
endNbr   = args[1].to_i

if (startNbr <= endNbr)
    (startNbr..endNbr).each {|n| fizzbuzz n}
else
    puts "First arg must be less than or equal to second arg."
end

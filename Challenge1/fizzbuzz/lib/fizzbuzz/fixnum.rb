class Fixnum
  def fizzbuzz
    (1..self).map(&:to_fizzbuzz).tap(&method(:puts))
  end

  def to_fizzbuzz
    str = ""
    str += "Fizz" if fizzable?
    str += "Buzz" if buzzable?
    str.empty? ? to_s : str
  end

  def fizzable?
    (self % 3).zero?
  end

  def buzzable?
    (self % 5).zero?
  end
end

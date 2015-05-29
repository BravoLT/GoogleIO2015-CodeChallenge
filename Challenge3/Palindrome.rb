args = []

ARGV.each_with_index do|a,i|
  args[i] = a
end

class String
  def palindrome?
    letters = self.downcase.scan(/\w/)
    letters == letters.reverse
  end
end

File.open(args[0])
puts "Implement Manacher's Algorithm Here..."

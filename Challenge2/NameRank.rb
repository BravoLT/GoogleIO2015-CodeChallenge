args = []

ARGV.each_with_index do|a,i|
  args[i] = a
end

nameranks = Hash.new
File.open(args[0]).each do |line|
    name = line.strip
    if (nameranks[name] != nil)
        nameranks[name] += 1
    else
        nameranks[name] = 1
    end
end

nameranks = nameranks.sort_by {|_name, rank| rank}.reverse

nameranks.each do |name, rank|
    puts "#{name} - #{rank}"
end

print '\n\n\nChallenge 3\n'
class PalindromeFinder(object):
	def __init__(self,filename):
		self._palindromes = list()
		with open(filename, 'r') as f:
			for line in f.readlines():
				for word in line.split():
					word = word.strip()
					if word == word[::-1]:
						self._palindromes.append(word)

	def longest(self):
		longest = ''
		for p in self._palindromes:
			longest = p if len(p) >= len(longest) else longest
		return longest if len(longest) > 0 else None

finder = PalindromeFinder('gettysburg.txt')
print finder.longest()
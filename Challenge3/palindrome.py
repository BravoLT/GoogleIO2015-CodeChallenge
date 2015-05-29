import re
print '\n\n\nChallenge 3\n'
class PalindromeFinder(object):
	def __init__(self,filename):
		self._palindromes = list()
		with open(filename, 'r') as f:
			text = re.sub('[^\w]+', '', f.read())
			for i in range(len(text)):
				for j in range(0, i):
					chunk = text[j:i + 1]
					if chunk == chunk[::-1]:
						self._palindromes.append(chunk)

	def longest(self):
		longest = ''
		for p in self._palindromes:
			longest = p if len(p) >= len(longest) else longest
		return longest if len(longest) > 0 else None

finder = PalindromeFinder('gettysburg.txt')
print finder.longest()
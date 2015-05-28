from collections import Counter

class NameRanker():
	def __init__(self):
		self._counter = Counter()

	def process_file(self,filename):
		with open(filename, 'r') as f:
			for name in f:
				self._counter[name.strip()] += 1

	def top_n(self,n):
		return self._counter.most_common(n)
		
	def number_of_names(self, name):
		return self._counter[name]

ranker = NameRanker()
ranker.process_file('test_input.txt')
for name in ranker.top_n(10):
	print "{0} - {1}".format(*name)
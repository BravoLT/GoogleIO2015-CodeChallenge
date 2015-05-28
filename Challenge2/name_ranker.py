from collections import Counter

class NameRanker(object):
	_counter = Counter()

	def process_file(self,filename):
		with open(filename, 'r') as f:
			for name in f:
				self._counter[name.strip()] += 1

	def top_n(self,n):
		return self._counter.most_common(n)
		
	def number_of_names(self, name):
		return self._counter[name]

	def empty(self):
		self._counter = Counter()
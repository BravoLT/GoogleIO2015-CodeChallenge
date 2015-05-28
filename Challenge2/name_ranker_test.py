from name_ranker import NameRanker
import unittest

class NameRankerTest(unittest.TestCase):
	def setUp(self):
		self.ranker = NameRanker()
		self.ranker.process_file('test_input.txt')

	def test_top_2(self):
		self.assertEquals(self.ranker.top_n(2), [('Mary', 3), ('Amy', 3)])

	def test_number_of_names(self):
		self.assertEquals(self.ranker.number_of_names('Mary'),3)


if __name__ == '__main__':
	print '\nChallenge 2 Unit Tests'
	unittest.main()
import unittest
from palindrome import PalindromeFinder

class PalindromeTest(unittest.TestCase):

	def test_find_longest(self):
		finder = PalindromeFinder('palindromes.txt')
		self.assertEqual(finder.longest(),'rotavator')

	def test_no_palindromes(self):
		finder = PalindromeFinder('gettysburg.txt')
		self.assertEqual(finder.longest(),None)

if __name__ == '__main__':
	unittest.main()
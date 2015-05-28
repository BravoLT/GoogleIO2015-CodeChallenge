import unittest
from fizzbuzz import fizz_buzz

class FizzBuzzTest(unittest.TestCase):

	def test_fizz(self):
		self.assertEqual(fizz_buzz(3), 'Fizz')

	def test_buzz(self):
		self.assertEqual(fizz_buzz(5), 'Buzz')

	def test_fizz_buzz(self):
		self.assertEqual(fizz_buzz(15), 'FizzBuzz')

	def test_not_fizz_buzz(self):
		self.assertEqual(fizz_buzz(17), 17)

if __name__ == '__main__':
	unittest.main()
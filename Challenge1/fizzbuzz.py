print '\n\n\nChallenge 1\n'
def fizz_buzz(n):
	result = ''
	if not n % 3:
		result += 'Fizz'
	if not n % 5:
		result += 'Buzz'
	if n % 3 and n % 5:
		result = n
	return result

def fizz_buzz_to_n(n):
	for i in xrange(n):
		print fizz_buzz(i)

fizz_buzz_to_n(100)
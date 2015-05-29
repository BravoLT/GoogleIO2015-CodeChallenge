#!/usr/bin/python

def run():
	for i in range(100):
		if i == 0:
			continue
		three = i % 3
		five = i % 5

		if three == 0 and five == 0:
			print 'FizzBuzz'
			continue
		if three == 0:
			print 'Fizz'
			continue
		if five == 0:
			print 'Buzz'
			continue
		print i

if __name__ == '__main__':
	run()

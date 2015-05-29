#!/usr/bin/python

import sys

def run(filename):
	f = open(filename, 'r')

	d = dict()

	for line in f:
		line = line[:-1]
		if not line in d:
			d[line] = 1
		else:
			d[line] += 1

	for w in sorted(d, key=d.get, reverse=True):
		print '{0} - {1}'.format(w, d[w])

if __name__ == '__main__':
	filename = sys.argv[1]
	run(filename)
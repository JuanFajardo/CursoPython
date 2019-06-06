#!/bin/python

import math
import sys

#int
a = 28
print "Tipo: %s " % (type(a))
print "Int: %i " % (a)
print "MaxInt: %s " % (sys.maxint)

#long
b = 9223372036854775999L
print "Tipo: %s " % (type(b))
print "Long: %i " % (b)

#float
c = 2.718281828
print "tipo: %s " % (type(c))
print "Float: %f " % (c)

#complex
d = 3 + 5.7j
print "tipo %s " % (type(d))
print "Complejo: %s " % (d)
print "tipo %s " % (type(d.real))
print "Real: %s " % ( d.real )
print "tipo %s " % (type(d.imag))
print "Imag: %s " % (d.imag)


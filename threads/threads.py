#buggy - needs to be fixed

from threading import Thread 
import urllib 
import re

def th(ur):
    base = "http://finance.yahoo.com/q?s="+ur
    regex = '<span id="yfs_l84_'+ur.lower()+'">(.+?)</span>'
    pattern = re.compile(regex)
    htmltext = urllib.urlopen(base).read()
    results = re.findall(pattern,htmltext)
    print "The price of "+str(ur)+str(results[0])
#	regex = "<title>.+?</title>" 

#	print "The price of ",ur,results	

symbolslist = open("threads/symbols.txt").read()
symbolslist = symbolslist.replace(" ","").split(",")

print symbolslist
# the symbols.txt did not match to that of the tutorial, creating a bug

#urls = "http://google.com http://cnn.com http://yahoo.com http://wikipedia.com".split()
#urls = "".split


threadlist = []

for u in symbolslist: 
	t = Thread(target=th,args=(u,))
	t.start()
	threadlist.append(t)

for b in threadlist: 
	b.join()
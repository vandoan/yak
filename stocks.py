import urllib
import re

symbolslist = ["aapl","spy", "goog", "nflx"]

i=0
while i<len(symbolslist): 
	url = "http://finance.yahoo.com/q?s=" +symbolslist[i]  + "&qul=1"
	htmlfile = urllib.urlopen(url)
	htmltext = htmlfile.read()
	regex = '<span id="yfs_l86_' + symbolslist[i] + '">(.+?)</span>'
	# double quote is important or will have an error 
	pattern = re.compile(regex)
	price = re.findall(pattern,htmltext)
	print "The price of ", symbolslist[i],  "is "  ,price, "." 
	i+=1




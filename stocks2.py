# this site provides a list of all the symbols
# http://www.nasdaq.com/screening/company-list.aspx

import urllib
import re

symbolfile = open("symbols.txt")

symbolslist = symbolfile.read()


newsymbolslist = symbolslist.split("\n")



i=0
while i<len(newsymbolslist): 
	url = "http://finance.yahoo.com/q?s=" +newsymbolslist[i]  + "&ql=1"
	htmlfile = urllib.urlopen(url)
	htmltext = htmlfile.read()
	regex = '<span id="yfs_l86_[^.]*">(.+?)</span>'
	# double quote is important or will have an error 
	pattern = re.compile(regex)
	price = re.findall(pattern,htmltext)
	print "The price of ", newsymbolslist[i],  "is "  ,price, "." 
	i+=1




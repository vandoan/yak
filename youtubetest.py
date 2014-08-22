import urllib 
import re

# first v.: htmlfile = urllib.urlopen("http://google.com")

urls = ["http://google.com", "http://nytimes.com", "http://cnn.com"]

i=0
regex = '<title>(.+?)</title>' 
pattern = re.compile(regex)

while i< len(urls) : 
		htmlfile = urllib.urlopen(urls[i])
		htmltext = htmlfile.read()
		titles = re.findall(pattern,htmltext)

#		print htmltext[0:100]
		print titles
		i+=1



# first v.: htmltext= htmlfile.read()

#print htmltext
import urllib 
from bs4 import BeautifulSoup
import urlparse
import mechanize 

#url = "http://adbnews.com"

#br = mechanize.Browser()

#br.open(url)

#for link in br.links():
#	newurl = urlparse.urljoin(link.base_url, link.url)
#	print newurl


#url = "http://sparkbrower.com"
#htmlfile = urllib.urlopen(url)

#soup = BeautifulSoup(htmlfile) 

#for tag in soup.findAll('a',href=True): 
#	print urlparse.urlparse(tag['href']).path


url = "http://sparkbrower.com"

br = mechanize.Browser()

br.open(url)

for link in br.links():
	newurl = urlparse.urljoin(link.base_url,link.url)
	b1 = urlparse.urlparse(newurl).hostname
	b2 = urlparse.urlparse(newurl).path
	print "http://"+b1+b2








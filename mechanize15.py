import urllib 
from bs4 import BeautifulSoup
import urlparse
import mechanize 

#url = "http://adbnews.com/area51/contact.html"
url = "http://nytimes.com"

br = mechanize.Browser()
urls = [url]
visited = [url]
while len(urls)>0: 
	try: 
		br.open(urls[0])
		urls.pop(0)
		for link in br.links():
			newurl = urlparse.urljoin(link.base_url,link.url)
			b1 = urlparse.urlparse(newurl).hostname
			b2 = urlparse.urlparse(newurl).path
			newurl = "http://"+b1+b2

			if newurl not in visited and urlparse.urlparse(url).hostname in newurl: 
				visited.append(newurl) 
				urls.append(newurl)
				print newurl

	except: 
		print "error"
		urls.pop(0)

#print visited




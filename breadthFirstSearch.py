# buggy, not functioning

import readability 
from bs4 import BeautifulSoup
from readability.readability import Document
import urlparse

url = "http://www.nytimes.com/2014/08/25/science/methane-is-seeping-from-seafloor-off-east-coast-scientists-say.html?src=mv&_r=0"


def scrapper(root,steps):
	step_url = scrapeStep(urls)
	urls = []
	visited = [root]
	counter = 0 
	while counter < steps: 
		step_url = scrapeStep(urls) 
		urls = []
		for u in step_url: 
			if u not in visited: 
				urls. append(u)
				visited.append(u)
			counter+=1 

		return visited 

def scrapeStep(root): 
	result_urls = []
	br = mechanize.Broswer()
	br.set_handle_robots(False)
	br.addheaders = [("User-agent", 'Firefox')]

	for url in root: 
		try: 
			br.open(url) 
			for link in br.links(): 
				newurl = urlparse.urljoin(link.base_url)
				result_urls.append(newurl)
			except: 
				print "error" 
		return result_urls


d = {}
threadlist = []

def getReadableArticle(url): 
	br =mechanize.Browser()
	br.set_handle_robots(False)
	br.addheaders = [('User-agent', 'Firefox')]

	html = br.open(url).read()

	readable_article = Document(html).summary()
	readable_title = Document(html).short_title()

	soup = BeautifulSoup(readable_article)



def dungalo(urls): 
	article_text = getReadableArticle(urls)[0]
	d[urls] = article_text 

def getMultiHtml(urlslist): 
	
	for urls1 in urlsList: 
		try: 
			t = Thread(target=dungalo, args =(urls1,))
			threadlist.append(t)
			t.start()
		except: 
			nnn = True

	for g in threadlist: 
		g.join()

		return d 

		print scraper(url,3)




import nltk
import urllib
import readability 
from bs4 import BeautifulSoup
from readability.readability import Document 
import mechanize

url = "http://www.nytimes.com/2014/08/25/science/methane-is-seeping-from-seafloor-off-east-coast-scientists-say.html?src=mv&_r=0"
br = mechanize.Browser()
br.set_handle_robots(False)
br.addheaders = [('User-agent', 'Firefox')]

html = br.open(url).read()

readable_article = Document(html).summary()
readable_title = Document(html)

soup = BeautifulSoup(readable_article)

final_article = soup.text

links = soup.findAll('img', src = True)

#print html
print readable_title
print final_article

#print readable_title

#print readable_article
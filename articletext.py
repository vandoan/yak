from bs4 import BeautifulSoup

def get ArticleText(webtext): 
	soup = BeautifulSoup(webtext)
	for tag in soup.findAll('p'):
		print tag
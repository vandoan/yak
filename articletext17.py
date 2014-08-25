from bs4 import BeautifulSoup
import getHtml17

def getArticleText(webtext):
	articletext = ""
	soup = BeautifulSoup(webtext)
	for tag in soup.findAll('p',attrs={"itemprop":"articleBody"}): 
		articletext += tag.contents[0]
	return  articletext

def getArticle(url):
	htmltext = getHtml17.getHtmlText(url) 
	return getArticleText(htmltext)
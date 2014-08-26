import getHtml17
import articletext17

url = "http://www.nytimes.com/2014/08/25/science/methane-is-seeping-from-seafloor-off-east-coast-scientists-say.html?src=mv&_r=0"

# print getHtml17.getHtmlText()

#print articletext17.getArticle(url)
article = articletext17.getArticle(url) 
# to get html keyword
#		article = getHtml17.getHtmlText(url)
print articletext17.getKeywords(article)
import urllib
import re
#<span id="ref_22144_l">100.58</span>

htmltext = urllib.urlopen("https://www.google.com/finance?q=AAPL")
# get rid of the read function b/c of json. it doesn't read strings
#insert minimalist url with data
#takes time to hack away at the site's url to find the right address using the inspection tool 

data = json.load(htmltext
	)


print  data['last_price']


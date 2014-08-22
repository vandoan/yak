import urllib
import re
import json


htmltext = urllib.urlopen("http://www.bloomberg.com/markets/chart/data/1M/AAPL:US") 

# get rid of the read function b/c of json. it doesn't read strings
#insert minimalist url with data
#takes time to hack away at the site's url to find the right address using the inspection tool 

data = json.load(htmltext
	)


datapoints = data["data_values"]

#print datapoints[0]
# prints the first element
print  datapoints[len(datapoints)-1][1]
# prints the last data point and only the price: item[1][1]

for point in datapoints: 
	print point[1]

print "the number of points is ", len(datapoints)

# success!







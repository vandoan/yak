# MYSQL Database Connection 
# Non functioning 

from threading import Thread 
import urllib 
import re
import MySQLdb

gmap = {}



def th(ur):
    base = "http://finance.yahoo.com/q?s="+ur
    regex = '<span id="yfs_l84_'+ur.lower()+'">(.+?)</span>'
    pattern = re.compile(regex)
    htmltext = urllib.urlopen(base).read()
    results = re.findall(pattern,htmltext)
    gmap[ur] = re.finall(pattern,htmltext)
    try: 
        gmap[ur] = results[0]
    except: 
        print "got an error"
    #   regex = "<title>.+?</title>" 

#   print "The price of ",ur,results    

symbolslist = open("threads/symbols.txt").read()
symbolslist = symbolslist.replace(" ","").split(",")

print symbolslist
# the symbols.txt did not match to that of the tutorial, creating a bug

#urls = "http://google.com http://cnn.com http://yahoo.com http://wikipedia.com".split()
#urls = "".split


threadlist = []

for u in symbolslist: 
    t = Thread(target=th,args=(u,))
    t.start()
    threadlist.append(t)

for b in threadlist: 
    b.join()


login_info = open("threads/login.txt").read()
longin_info = login_info.split()

host = login_info[0]
user = login_info[1]
password = login_info[2]

conn =  MySALdb.connect(host=login_info[0], user=login_info[1],passwd=login_[2],db="stock_data")


for key in gmap.keys(): 
    print key,gmap[key]
    query = "INSERT INTO tutorial (symbol) values ("
    query = query+"'"+key+"',"+gmap[key]+" ")"
    x = conn.cursor()
    x.execute(query)
    row = x.fetchall





query = "INSERT INTO tutorial (symbol) values ('AAPL')" 
x = conn.cursor()
x.execute(query)
row = x.fetchall()
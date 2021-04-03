# unwanted-Things
Nothing Special

### Get title of Websites from list 

```bash
for i in $(cat subdomains ); do echo "$i | $(curl --connect-timeout 0.5 $i -so - | grep -iPo '(?<=<title>)(.*)(?=</title>)')"; done
```
### Open Redirect Vulnerability scanning with gau gf qsreplace and httpx 

```bash
gau testphp.vulnweb.com | gf openredirect | qsreplace "https://evil.com" | httpx -silent -status-code -location
```
### Filter alive subdomains from previously collected subdomains list using host 

```bash
while read sub; do  if host $sub &> /dev/null; then    echo "$sub";  fi done < subdomains
```

### google-search using python3

```python3
#!/usr/bin/env python3
import sys
import os
execute=os.system
try: 
    from googlesearch import search 
except ImportError:  
    print("No module named 'google' found installing it now")
    execute('pip3 install google')
query = sys.argv[1]
for j in search(query, tld='com', num=30, start=0, stop=None, pause=2.0): 
    print(j) 
    #num defines how many search pages to grub 
    #start defines start from which page 
    #pause defines Lapse to wait between HTTP requests
```

### Use google-search To Grep Gtfo-bin Result (html2text)

```bash
python3 google-search intitle:"ftp"+site:gtfobins.github.io | xargs curl -sL| html2text

#Dork: intitle:"ftp"+site:gtfobins.github.io
```
### Use google-search To Grep lol-bash Result (html2text)

```bash
python3 google-search intitle:"at"+site:lolbas-project.github.io | xargs curl -sL| html2text

#Dork: intitle:"at"+site:lolbas-project.github.io
```
### SUBDOMAIN_TAKEOVER [From:- m4ll0k/takeover]
```node
'AWS/S3'          : {The specified bucket does not exist'},
'BitBucket'       : {Repository not found'},
'Github'          : {There isn't a Github Pages site here.'},
'Shopify'         : {Sorry, this shop is currently unavailable.'},
'Fastly'          : {Fastly error: unknown domain:'},
'Ghost'           : {The thing you were looking for is no longer here, or never was'},
'Heroku'          : {no-such-app.html|<title>no such app</title>|herokucdn.com/error-pages/no-such-app.html'},
'Pantheon'        : {The gods are wise, but do not know of the site which you seek.'},
'Tumbler'         : {Whatever you were looking for doesn't currently exist at this address.'},
'Wordpress'       : {Do you want to register'},
'TeamWork'        : {Oops - We didn't find your site.'},
'Helpjuice'       : {We could not find what you're looking for.'},
'Helpscout'       : {No settings were found for this company:'},
'Cargo'           : {<title>404 &mdash; File not found</title>'},
'Uservoice'       : {This UserVoice subdomain is currently available!'},
'Surge'           : {project not found'},
'Intercom'        : {This page is reserved for artistic dogs.|Uh oh. That page doesn't exist</h1>'},
'Webflow'         : {<p class="description">The page you are looking for doesn't exist or has been moved.</p>'},
'Kajabi'          : {<h1>The page you were looking for doesn't exist.</h1>'},
'Thinkific'       : {You may have mistyped the address or the page may have moved.'},
'Tave'            : {<h1>Error 404: Page Not Found</h1>'},
'Wishpond'        : {<h1>https://www.wishpond.com/404?campaign=true'},
'Aftership'       : {Oops.</h2><p class="text-muted text-tight">The page you're looking for doesn't exist.'},
'Aha'             : {There is no portal here ... sending you back to Aha!'},
'Tictail'         : {to target URL: <a href="https://tictail.com|Start selling on Tictail.'},
'Brightcove'      : {<p class="bc-gallery-error-code">Error Code: 404</p>'},
'Bigcartel'       : {<h1>Oops! We couldn&#8217;t find that page.</h1>'},
'ActiveCampaign'  : {alt="LIGHTTPD - fly light."'},
'Campaignmonitor' : {Double check the URL or <a href="mailto:help@createsend.com'},
'Acquia'          : {The site you are looking for could not be found.|If you are an Acquia Cloud customer and expect to see your site at this address'},
'Proposify'       : {If you need immediate assistance, please contact <a href="mailto:support@proposify.biz'},
'Simplebooklet'   : {We can't find this <a href="https://simplebooklet.com'},
'GetResponse'     : {With GetResponse Landing Pages, lead generation has never been easier'},
'Vend'            : {Looks like you've traveled too far into cyberspace.'},
'Jetbrains'       : {is not a registered InCloud YouTrack.'},
'Smartling'       : {Domain is not configured'},
'Pingdom'         : {pingdom'},
'Tilda'           : {Domain has been assigned'},
'Surveygizmo'     : {data-html-name'},
'Mashery'         : {Unrecognized domain <strong>'},
'Divio'           : {Application not responding'},
'feedpress'       : {The feed has not been found.'},
'readme'          : {Project doesnt exist... yet!'},   
'statuspage'      : {You are being <a href='https>'},
'zendesk'         : {Help Center Closed'},
'worksites.net'   : {Hello! Sorry, but the webs>'}

``` 
### DORKING
``` text
cache:[url]	Shows the version of the web page from the search engine’s cache.
related:[url]	Finds web pages that are similar to the specified web page.
info:[url]	Presents some information that Google has about a web page, including similar pages, the cached version of the page, and sites linking to the page.
site:[url]	Finds pages only within a particular domain and all its subdomains.
intitle:[text] or allintitle:[text]	Finds pages that include a specific keyword as part of the indexed title tag. You must include a space between the colon and the query for the operator to work in Bing.
allinurl:[text]	Finds pages that include a specific keyword as part of their indexed URLs.
meta:[text]	Finds pages that contain the specific keyword in the meta tags.
filetype:[file extension]	Searches for specific file types.
intext:[text], allintext:[text], inbody:[text]	Searches text of page. For Bing and Yahoo the query is inbody:[text]. For DuckDuckGo the query is intext:[text]. For Google either intext:[text] or allintext:[text] can be used.
inanchor:[text]	Search link anchor text
location:[iso code] or loc:[iso code], region:[region code]	Search for specific region. For Bing use location:[iso code] or loc:[iso code] and for DuckDuckGo use region:[iso code].An iso location code is a short code for a country for example, Egypt is eg and USA is us. https://en.wikipedia.org/wiki/ISO_3166-1
contains:[text]	Identifies sites that contain links to filetypes specified (i.e. contains:pdf)
altloc:[iso code]	Searches for location in addition to one specified by language of site (i.e. pt-us or en-us)
feed:[feed type, i.e. rss]	Find RSS feed related to search term
hasfeed:[url]	Finds webpages that contain both the term or terms for which you are querying and one or more RSS or Atom feeds.
ip:[ip address]	Find sites hosted by a specific ip address
language:[language code]	Returns websites that match the search term in a specified language
book:[title]	Searches for book titles related to keywords
maps:[location]	Searches for maps related to keywords
linkfromdomain:[url]	Shows websites whose links are mentioned in the specified url (with errors)
``` 

### favico hash Generator
``` python
import mmh3
import requests
import codecs
import sys
url=sys.argv[1]
response = requests.get('https://'+url+'/favicon.ico')
favicon = codecs.encode(response.content,"base64")
hash = mmh3.hash(favicon)
has=hash
print("http.favicon.hash:",has)
#USAGE : script.py domain.tld

``` 
### Junkdomains usage
``` bash
./junkdomains subdomains.txt | sort -u
```

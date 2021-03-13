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
for j in search(query, tld='com', num=30, start=0, stop=None, pause=2.0): #num defines how many search pages to grub | start defines start from which page | pause defines Lapse to wait between HTTP requests
    print(j) 
```

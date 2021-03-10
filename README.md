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

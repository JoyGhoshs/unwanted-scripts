# unwanted-scripts
some unusual scripts i write

### Get title of Websites from list 

```bash
for i in $(cat subdomains ); do echo "$i | $(curl --connect-timeout 0.5 $i -so - | grep -iPo '(?<=<title>)(.*)(?=</title>)')"; done
```
### Open Redirect Vulnerability scanning with gau gf qsreplace and httpx 

```bash
gau testphp.vulnweb.com | gf openredirect | qsreplace "https://evil.com" | httpx -silent -status-code -location
```

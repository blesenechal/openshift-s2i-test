Test project to be deployed on OpenShift using S2I.

It just
* displays the HTTP headers received in HTTP request 
* responds with the following headers :
```
Content-Type: text/html
Connection: close
X-Test-Header: Test-Value
```
# rp

# set cors to all on a server

```
<Directory "/path/to/dir">
   <IfModule mod_headers.c>
 Header set Access-Control-Allow-Origin "*"
   </IfModule>
</Directory>
```
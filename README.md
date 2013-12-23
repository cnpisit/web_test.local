web_test.local
==============

Create VirtualHost
----------------
go to:wamp/bin/apache/apache2.2.22/conf/httpd.conf

		<VirtualHost *:80>
			ServerName web_test.local
			DocumentRoot "D:\Mapring\web_test.local"
		<Directory "D:\Mapring\web_test.local">
			Options Indexes FollowSymLinks MultiViews
			AllowOverride FileInfo
			Order allow,deny
			Allow from all
		</Directory>
			DirectoryIndex index.html index.php
		</VirtualHost>

goto: C:\Windows\System32\driver\etc\hosts
	add this line "127.0.0.1       web_test.local"
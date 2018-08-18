hosts
-----

127.0.0.1 www.testdp.com

httpd-vhosts.conf
-----------------

<VirtualHost *:80>
    ServerAdmin mail4umurugesh@gmail.com
	DocumentRoot "E:/project/dp/dp"
	ServerName www.testdp.com
	ServerAlias www.testdp.com
	<Directory "E:/project/dp/dp">
		Options Indexes FollowSymLinks MultiViews
		AllowOverride all
		Order Deny,Allow
		Allow from all
		Require all granted
	</Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerAdmin mail4umurugesh@gmail.com
	DocumentRoot "E:/project/dp/dp"
	ServerName www.testdp.com
	ServerAlias www.testdp.com
	<Directory "E:/project/dp/dp">
		Options Indexes FollowSymLinks MultiViews
		AllowOverride all
		Order Deny,Allow
		Allow from all
		Require all granted
	</Directory>
</VirtualHost>
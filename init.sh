#!/bin/bash
echo "Creating necessary paths..."
mkdir -p ./public/{assets,css,js} ./{views,partials,config,controllers}
echo "Creating necessary files..."
touch ./partials/{layout,header,footer,view}.php ./controllers/{HomeController,StaticContentController}.php ./views/{404,home}.php router.php routes.php db_conn.php ./public/index.php ./.htaccess ./config/credentials.php
echo "Creating .htcaccess file..."

echo "<IfModule mod_rewrite.c>" > .htaccess
echo "RewriteEngine On" >> .htaccess
echo "RewriteBase /" >> .htaccess
echo "RewriteCond %{REQUEST_FILENAME} !-f" >> .htaccess
echo "RewriteCond %{REQUEST_FILENAME} !-d" >> .htaccess
echo "RewriteRule ^ index.php [QSA,L]" >> .htaccess
echo "</IfModule>" >> .htaccess
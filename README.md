composer install 
npm install

php artisan serve









Laravel Framework 6.20.18
php artisan --version


php artisan route:list


php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear

-----------------------------------------------------

Server Settings:
(possible problems: mac os update)
(if not asked for password = problem!)

Apache 80
Nginx 80 
MySQL 3306 

composer self-update --rollback to return to version 1.10.10

updated to composer2.0 

-----------------------------------------------------
To get the current memory_limit value, run:

php -r "echo ini_get('memory_limit').PHP_EOL;"

-----------------------------------------------------
edit#

update yes 

vendor replace complete no 

+ breadcrumbs Yes 

-----------------------------------------------------
# Install for testing 

1. Add Webkul Core Folder to Main
2. Edit test.env 

CODECEPTION_

important .yml files !!

Run Test 

> php vendor/bin/codecept run unit Checkout
> php vendor/bin/codecept run trigger
> php vendor/bin/codecept run functional Customer
> php vendor/bin/codecept run functional Shop
> php vendor/bin/codecept run functional CartRule
> php vendor/bin/codecept run functional Admin
> php vendor/bin/codecept run functional Checkout
<> php vendor/bin/codecept run acceptance
<> php vendor/bin/codecept run unit

Test related Packs 



-----------------------------------------------------

    "require-dev": {
        "codeception/codeception": ">=2.3.0",
        "codeception/module-asserts": "^1.0.0",
        "codeception/module-filesystem": "^1.0",
        "codeception/module-laravel5": "^1.1",
        "codeception/module-phpbrowser": "^1.0.0",
        "codeception/module-webdriver": "^1.2",
        "phpunit/phpunit": ">=4.0.0"
    }


-----------------------------------------------------  




# 

masterSignUp 
- no succes add to cart 
+ indexSignUp = breadcrumps 
- index = Nav Menu 
- shop.css

masterBreadCrumps
+ succes add to cart 
+ indexSignUp = breadcrumps 
- index = Nav Menu 
- shop.css

master
+ succes add to cart 
+ index = Nav Menu 
- indexSignUp = breadcrumps 
- shop.css


-----------------------------------------------------

// admin css to resourcess assetes admin scsss
// us css same 


removed from config/app.php 
Webkul\Velocity\Providers\VelocityServiceProvider::class

removed from config/concord.php 
\Webkul\Velocity\Providers\ModuleServiceProvider::class,


-----------------------------------------------------


php --ini where is file 


Here =

Configuration File (php.ini) Path: /usr/local/etc/php/7.4
Loaded Configuration File:         /usr/local/etc/php/7.4/php.ini
Scan for additional .ini files in: /usr/local/etc/php/7.4/conf.d
Additional .ini files parsed:      /usr/local/etc/php/7.4/conf.d/ext-opcache.ini,
/usr/local/etc/php/7.4/conf.d/php-memory-limits.ini

memorylimit: unlimeted

-----------------------------------------------------


composer update 

composer clearcache

composer  outdated 


composer rollback




git revert 

git log --oneline

a5171f3 



git revert git add   

git reset 




-----------------------------------------------------




fresh db
fresh install of composer and node  
php artisan bagisto:install



fortrabbit 

edit composer 


    "config": {
        "preferred-install": "stable",
        "sort-packages": true,
        "optimize-autoloader": true,
        "platform": {
            "php": "7.3"
        }
    },





Publish shared server ionos 

direct webspace to public folder 
edit .htacces 

#option 2 - ionos
# Kirby .htaccess

# rewrite rules
<IfModule mod_rewrite.c>

# enable awesome urls. i.e.:
# http://yourdomain.com/about-us/team
RewriteEngine on

# make sure to set the RewriteBase correctly
# if you are running the site in a subfolder.
# Otherwise links or the entire site will break.
#
# If your homepage is http://yourdomain.com/mysite
# Set the RewriteBase to:
#
# RewriteBase /mysite

# RewriteBase /mysite
RewriteBase /

# block filess and folders beginning with a dot, such as .git
# except for the .well-known folder, which is used for Let's Encrypt and security.txt
RewriteRule (^|/)\.(?!well-known\/) index.php [L]

# block text files in the content folder from being accessed directly
RewriteRule ^content/(.*)\.(txt|md|mdown)$ index.php [L]

# block all files in the site folder from being accessed directly
# except for requests to plugin assets files
RewriteRule ^site/(.*) index.php [L]

# Enable authentication header
SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1

# block direct access to kirby and the panel sources
RewriteRule ^kirby/(.*) index.php [L]

# make site links work
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*) index.php [L]

</IfModule>

# compress text file responses
<IfModule mod_deflate.c>
AddOutputFilterByType DEFLATE text/plain
AddOutputFilterByType DEFLATE text/html
AddOutputFilterByType DEFLATE text/css
AddOutputFilterByType DEFLATE text/javascript
AddOutputFilterByType DEFLATE application/json
AddOutputFilterByType DEFLATE application/javascript
AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>



# BROWSER CACHING USING EXPIRES HEADERS
<IfModule mod_expires.c>
    ExpiresActive On
  
    # Images
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType image/x-icon "access plus 1 year"
  
    # Video
    ExpiresByType video/mp4 "access plus 1 year"
    ExpiresByType video/mpeg "access plus 1 year"

    # CSS, JavaScript
    ExpiresByType text/css "access plus 1 week"
    ExpiresByType text/javascript "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"

    # Others
    ExpiresByType application/pdf "access plus 1 month"
    ExpiresByType application/x-shockwave-flash "access plus 1 month"
</IfModule>

# BROWSER CACHING USING CACHE-CONTROL HEADERS
<ifModule mod_headers.c> 
    # One year for image and video files
    <filesMatch ".(flv|gif|ico|jpg|jpeg|mp4|mpeg|png|svg|swf|webp)$">
        Header set Cache-Control "max-age=31536000, public"
    </filesMatch>

    # One month for JavaScript and PDF files
    <filesMatch ".(js|pdf)$">
        Header set Cache-Control "max-age=2592000, public"
    </filesMatch>

    # One week for CSS files
    <filesMatch ".(css)$">
        Header set Cache-Control "max-age=604800, public"
    </filesMatch>
</ifModule>



-----------------------------------------------------
shop.js jquery version 3.5.1

-----------------------------------------------------

function 

getFeaturedProducts
 })->paginate(8);



-----------------------------------------------------
.htacces auto umleitung auf ssl 


 RewriteCond %{SERVER_PORT} !=443
RewriteRule ^(.*)$ https://example.com/$1 [R=301,L]


-----------------------------------------------------
error in ResourceController.php

change 

 public function __construct()
    {
        $this->guard = request()->has('token') ? 'api' : 'customer';

        $this->_config = request('_config');

        if (isset($this->_config['authorization_required']) && $this->_config['authorization_required']) {

            auth()->setDefaultDriver($this->guard);

            $this->middleware('auth:' . $this->guard);
        }

        if ($this->_config) {
            $this->repository = app($this->_config['repository']);
        }
    }

-----------------------------------------------------

Updating guzzlehttp/guzzle (6.5.5 => 7.2.0): Downloading (100%)   




----------------------------------------------------------------------------------------------------------

<?php
header('X-Clacks-Overhead: "GNU Terry Pratchett"');
header('X-XSS-Protection: 1;mode=block');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Expect-CT: enforce,max-age=2592000');
header('Content-Language: en');
header('Referrer-Policy: origin-when-cross-origin');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
header('Permissions-Policy: geolocation=(self "https://shady-tawfik.de/"), microphone=()');
?>

added to header

- .product remove view_render_event


'invalid-coupon' => 'Dieser Gutschein-Code ist nicht gültig',







----------------------------------------------------------------------------------------------------------

main branch bug: status ?
master branch: clear


You can view the new private and public key by running the following:
[local]$ ls -1 ~/.ssh/
id_rsa
id_rsa.pub



CALC german VAT
ADMIN Setting Rate 
taxe_rate = 1.1900

// ?? GERMAN MWST CAL BASED ON GRANDTOTAL
$item->tax_amount = ($item->total * 100) / (100 * $rate->tax_rate);
$item->base_tax_amount = ($item->base_total * 100) / (100 * $rate->tax_rate);



php artisan storage:link
dh_qs66q5@tva-studio.de

 #             ""#      m""
 # mm    mmm     #    mm#mm m     m  mmm   m   m
 #"  #  "   #    #      #   "m m m" "   #  "m m"
 #   #  m"""#    #      #    #m#m#  m"""#   #m#
 #   #  "mm"#    "mm    #     # #   "mm"#   "#
                                            m"
                                           ""
[halfway]$ ls
Maildir  index.css  index.css.map  logs  tva-studio.de	tva_studio_working.zip
[halfway]$ cd tva-studio.de
[halfway]$ ls
 Cart.php	 codeception.yml       package-lock.json   server.php
 README.md	 composer.json	       package.json	   storage
 app		 composer.lock	       packages		   tests
 artisan	 config		       phpunit.xml	   vendor
 bin		 database	       public		   webpack.mix.js
 bootstrap	'migration guide.md'   resources
 cms-code.html	 node_modules	       routes
[halfway]$ php artisan storage:link
The [public/storage] directory has been linked.
[halfway]$

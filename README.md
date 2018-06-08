# AfricasTalkingSmsApi

This is a small php script to show how to integrate AfricasTalking (https://africastalking.com/) Sms Api
Documentation for the different platforms can be found at http://docs.africastalking.com/sms/sending
You can also use it as it is.Just change the username,api key,recepient and message variables
The Api key and username can be obtained from AfricasTalking user account dashboard

# Requirements
1.PHP 7
2.Apache server
3.PHP Curl

# SetUp
In ubuntu

apt-get install php libapache2-mod-php php-mcrypt php-curl
apt-get install apache2
nano /etc/apache2/mods-enabled/dir.conf then add index.php
service apache2 restart
clone the repo to the apache root folder i.e /var/www/html
call the script using the browser http://localhost/AfricasTalkingSmsApi/testsms.php


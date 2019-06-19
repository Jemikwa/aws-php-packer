#!/bin/bash

sudo apt-get update
sudo apt-get install -y apache2 php libapache2-mod-php
sudo rm /var/www/html/index.html

sudo tee "/var/www/html/index.php" > /dev/null <<'EOF'
<?php
header("Content-Type: text/plain");
echo "My IP:   ".gethostbyname(trim(`hostname`))."\n";
echo "Your IP: ".$_SERVER['REMOTE_ADDR']."\n";
EOF

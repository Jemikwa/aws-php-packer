# aws-php-packer

Personal testing with Hashicorp's Packer for creating an AWS AMI.

Packer details create an Ubuntu VM with apache2, php, and libapache2-mod-php installed to set up a php apache web server. The web server outputs the local IP of the VM (useful for testing load balancing among multiple VMs, especially when configuring an Auto Scaling Group)

# Opinion-poll
## Install and Enable Apache2, PHP, MySQL
$ sudo apt update && upgrade</br>
$ sudo apt install apache2</br>
$ sudo apt install php libapache2-mod-php php-mysql</br>
## Technology Used
PHP, MySQL and JavaScript
## Creating Database 
create database poll;
## Creating Table
create table author_poll (</br>`id` int(11) NOT NULL AUTO_INCREMENT,</br>`choice` tinyint(4) NOT NULL DEFAULT '0',</br>`ts` timestamp NULL DEFAULT NULL,</br>PRIMARY KEY (`id`));
## Screenshots
![poll](Screenshot from 2019-11-16 19-33-41.png)

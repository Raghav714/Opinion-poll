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
![Poll-1](https://user-images.githubusercontent.com/29707542/68994517-e99b8480-08a9-11ea-9ddc-e20b39902c6e.png)
![poll-2](https://user-images.githubusercontent.com/29707542/68994510-d4bef100-08a9-11ea-8388-2d5c7ce0804d.png)

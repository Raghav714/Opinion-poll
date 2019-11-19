# Opinion-poll
- [x] Structuring code in OOPS paradigm
- [x] Showing results in a pie chart.
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
## Discribtion of Files
• database.sql -> This file consist of MySQL Query to create Database and Table.</br>
• db_fn.php -> This file is used to create the MySQL operation function to develop the OOPS paradigm.</br>
• display.php -> This is used to display the Result in the Pie Chart Format.</br>
• opinion.php -> This is used to Poll form.</br>
## Run the System
$ sudo /etc/init.d/apache2 restart (Start the Apache2 server)</br>
• Copy the Unzip Repositry to '/var/www/html/' location</br>
• Open any Browser and type the address 'http://localhost/opinion.php'</br>
## Screenshots
![Poll-1](https://user-images.githubusercontent.com/29707542/68994517-e99b8480-08a9-11ea-9ddc-e20b39902c6e.png)
![poll-2](https://user-images.githubusercontent.com/29707542/68994510-d4bef100-08a9-11ea-8388-2d5c7ce0804d.png)

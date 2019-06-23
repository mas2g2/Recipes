# Recipes

In the home page of this function the user will enter ingredients that he or she wants to use for cooking
and some suggestions for recipes will be provided lower in the page

To download this code and run this code requirements and recommendations are:
	- Apache 2
	- MySql
	- PHP 7.0+
	- jQuery
	- HTML
	- AWS EC2 Instance (Highly recommended)

Before running this program also run the following commands:
	```sudo service mysql tart```

This command will start the MySQL service for you to host your applicationn
also run the following commands to add a user for your data base server

	```sudo mysql```

This command will start the MySQL Monitor
From here you can add a user, create a database, tables, modify databases etc.

To add a user run the followin commands in the MySQL MonitorP:
	```grant all privileges to 'user'@'localhost' identified by 'password';```
	```flush privilges```

To create tables in recipe database run command:
	```\. recipes.sql```


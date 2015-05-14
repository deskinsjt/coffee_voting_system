
# Coffee Voting System

## Installing Dependencies

 - Install LAMP
   - Install Apache (`sudo apt-get install apache2`)
   - Install mysql (`sudo apt-get install mysql-server mysql-client`)
   - Install PHP (`sudo apt-get install php5`)
   - Link php/mysql: (`sudo apt-get install php5-mysql`)
 - Create a database/user. Log in to mysql (`mysql -u root -p`), and do something like:
   - `CREATE DATABASE coffee;`
   - `CREATE USER 'coffee'@'localhost' IDENTIFIED BY 'coffee';`
   - `GRANT ALL ON coffee.* TO coffee`
 - Download and unzip [phpCAS](https://wiki.jasig.org/display/casc/phpcas)
   - phpCAS requires php5-curl (`sudo apt-get install php5-curl`)

## Setting up the script

 - Clone! `cd ` to the web directory (probably something like `cd /var/www`)
   - `git clone https://github.com/cwru-pat/coffee_stuff.git`
   - Change to this directory, `cd coffee_stuff`
 - Copy the settings file, `cp private/.default-config.php private/.config.php`. The file `private/.config.php` is ignored in .gitignore, so you can edit it without worrying about passwords being committed.
   - Edit the `$config['database'][...]` to reflect the mysql credentials created above.
   - Edit `$config['web']['path']` to point to the URL where you can view the system.
   - Edit `$config['phpCAS']['location']` to point to system path where the CAS.php file inside the phpCAS directory is (it should probably not be a subdirectory of this repo).
 - Finally, `$coffee_conn->createTables();` needs to be run by the script, currently [line 26 in private/site.php](https://github.com/cwru-pat/coffee_stuff/blob/master/private/site.php#L26). This should be improved.

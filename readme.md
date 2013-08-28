###### System Requirements:

1. Debian 7.1
2. Git
3. Apache 2.2+
	* mod_rewrite
4. PHP 5.4+
	* php5-mysql
	* php5-mcrypt
	* php5-curl
5. MySQL
6. Composer
7. Ruby, RubyGems
8. NodeJS, NPM

###### Installation:

* It is recommended to use the Vagrant VM which contains the operating system, software, and configurations. Refer to the [vagrant readme](https://github.com/charitysound/vagrant/blob/master/readme.md).

###### Development Procedures

* Never work from the git master branch. Always create a new branch for issues and features.

* Use Grunt.js to watch your Javascript and SASS changes while working.

	```
vagrant ssh
cd /var/www/backend
grunt watch
```




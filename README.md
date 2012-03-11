[![Build Status](https://secure.travis-ci.org/mikedfunk/bookymark.png?branch=master)](http://travis-ci.org/mikedfunk/bookymark)

Bookymark
================

A sample CodeIgniter application to save bookmarks. Working version is available at [bookymark.com](http://bookymark.com).

Setup
----------------

1. Create a database called **bookymark** and Run ```setup.sql```. If you want unit tests to pass, duplicate this database as **bookymark_test**.
2. Update ```development/database.php```, ```production/database.php```, and ```testing/database.php``` with your database settings.
3. Set the following directories to writable: ```assets/cache``` and ```application/db_cache```.

About
----------------

Bookymark is a sample application created for a few reasons:

* Share an example of CodeIgniter best practices
* Collaborate with the community on what are better practices
* Practice new techniques and tools
* Simplify as much as possible
* Modularize code into libraries/packages/helpers/sparks whenever possible
* Get used to writing tests before writing code
* No deadlines
* No pressure to compete with other services or be successful
* No ever-growing roadmap of features, just the basics. Get one set of CRUD right so it can be duplicated in other projects
* Eventually port the complete application to other languages and frameworks as an exercise

Change Log
-----------------

**1.2.0**

* Updated **ci_authentication** and **ci_alerts** sparks to the latest versions
* Added [travis-ci](http://travis-ci.org) continuous integration
* Moved authentication methods to ```controllers/auth.php``` and authentication views to the auth/ folder
* Fixed problem with Twitter Bootstrap submodule
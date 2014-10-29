My Custom Symfony Installation
==============================

This is my custom symfony installation that is used for start small project.


1) Installing
-------------

Clone the project from github.

### Install the fixtures

Create the database, the database's schema then load the fixture :

    php app/console doctrine:fixtures:load

The fixture contain a super admin user. You can find or change the credentials in

src/App/UserBundle/DataFixtures/ORM/LoadUserData.php

2) How work with
----------------

You can find the basic pages and layouts in the FrontBundle (src/App/FrontBundle)

Furthermore, this installation comes with :
   * Jquery http://jquery.com/
   * Twitter Bootstrap http://getbootstrap.com/
   * Jquery validation http://jqueryvalidation.org/
   * Jquery placeholder https://github.com/mathiasbynens/jquery-placeholder
   * Bxslider http://bxslider.com/
   * Magnific Popup http://dimsemenov.com/plugins/magnific-popup/
   * GruntJS watch for livereload https://github.com/gruntjs/grunt-contrib-watch#optionslivereload

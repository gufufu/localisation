<?php 
// Local server settings
 
// Local Database
define('DB_NAME', 'client');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
 
// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://client.website.dev');
define('WP_SITEURL','http://client.website.dev');
 
// Turn on debug for local environment
define('WP_DEBUG', true);
<?php
  /*
   * Config File
   * Replace _ Values 
   * Also Replace RewriteBase in public/.htaccess
   */

  // Database Parameters
  define('DB_HOST', 'localhost');
  define('DB_USER', '_DATABASE_USERNAME_'); // 'root'
  define('DB_PASS', '_DATABASE_PASSWORD_'); // ''
  define('DB_NAME', '_DATABASE_NAME_'); // 'db_test'


  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', '_SITE_URL_'); // 'http://localhost/mvc'
  // Site Name
  define('SITENAME', '_SITENAME_'); // 'MVC Framework'
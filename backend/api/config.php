<?php
// KEEP CONFIG FILE IN A SECURE FOLDER!
// CHANGE ALL SETTINGS TO YOUR OWN!
// (A) DATABASE SETTINGS
define("DB_HOST", "127.0.0.1:3307");
define("DB_NAME", "phpexperts");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "desarrollo123");
 
// (B) JWT STUFF
define("JWT_SECRET", "kmilopruebas");
define("JWT_ISSUER", "kmilo-yepesE");
define("JWT_AUD", "site.com");
define("JWT_ALGO", "HS512");

?>
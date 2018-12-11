<!-- Attribution: Most of this code is from https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php -->
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '66.147.242.186');
define('DB_USERNAME', 'urcscon3_nyc');
define('DB_PASSWORD', 'liberty');
define('DB_NAME', 'urcscon3_nyc');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


?>
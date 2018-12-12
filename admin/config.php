<!-- Attribution: Most of this code is from 
	https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php 
	and some from Professor Kostin's CSC 174 files
-->
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '66.147.242.186');
define('DB_USERNAME', 'urcscon3_newyork');
define('DB_PASSWORD', 'liberty');
define('DB_NAME', 'urcscon3_newyork');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
	echo '<p>Connection OK '. $mysqli->host_info.'</p>';
	echo '<p>Server '. $mysqli->server_info.'</p>';
}

?>



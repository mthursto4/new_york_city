<!-- Attribution: Most of this code is from http://blog.chapagain.com.np/very-simple-add-edit-delete-view-in-php-mysql/ -->

<?php
//including the database connection file
include("../admin/config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM results WHERE id=$id");
 
//redirecting to the display page (../admin/welcome.php in our case)
header("Location:../admin/welcome.php");

?>
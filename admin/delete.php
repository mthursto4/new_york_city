<!-- Attribution: Most of this code is from http://blog.chapagain.com.np/very-simple-add-edit-delete-view-in-php-mysql/ -->

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM results WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");

?>
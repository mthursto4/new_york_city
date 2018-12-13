<!-- Attribution: 
  Most of this code is from 
    https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php 
    and http://blog.chapagain.com.np/very-simple-add-edit-delete-view-in-php-mysql/
  Inspiration from http://csc174.org/assignment13/london
-->

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
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM results ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($link, "SELECT * FROM results ORDER BY id DESC"); // using mysqli_query instead
?>


 
<!DOCTYPE html>
<html lang="en-US">
  <?php 
    $title = "Welcome";
    include "../inc/admin-head.php";?>
<body>

    <?php 
      include "../inc/nav.php"
      ?>

    <div class="page-header" id="center">
        <h1 class="color">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>

    <div class="survey">
        <h2>Survey Results</h2>

          <table width='80%' border=0>
              <tr bgcolor='#CCCCCC'>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Knowledge</td>
                  <td>Interest</td>
                  <td>Useful</td>
                  <td>Recommend</td>
                  <td>Era</td>
                  <td>Suggestions</td>
                  <td>Update</td>
              </tr>
              <?php 
              //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
              while($res = mysqli_fetch_array($result)) {         
                  echo "<tr>";
                  echo "<td>".$res['name']."</td>";
                  echo "<td>".$res['email']."</td>";
                  echo "<td>".$res['knowledge']."</td>";
                  echo "<td>".$res['interest']."</td>";
                  echo "<td>".$res['useful']."</td>";
                  echo "<td>".$res['recommend']."</td>";
                  echo "<td>".$res['era']."</td>";
                  echo "<td>".$res['suggestions']."</td>";    
                  echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
              }
              ?>

          </table>


          <a href="../sign-up.php">Add New Data</a><br/><br/>

        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
         </p>
    </div>

</body>
</html>
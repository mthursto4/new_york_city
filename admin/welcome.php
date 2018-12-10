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
include "../inc/head.php"
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
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>

    <div>
        <h2>Survey Results</h2>
        <p>[insert table here]</p>
    </div>

    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
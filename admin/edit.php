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
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $knowledge = $_POST['knowledge'];
    $interest = $_POST['interest'];
    $useful = $_POST['useful'];
    $recommend = $_POST['recommend'];
    $era = $_POST['era'];
    $suggestions = $_POST['suggestions'];
    
    // checking empty fields
    if(empty($name) || empty($email) || empty($knowledge) || empty($interest) || empty($useful) || empty($recommend) || empty($era) || empty($suggestions)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        if(empty($knowledge)) {
            echo "<font color='red'>Knowledge field is empty.</font><br/>";
        }
        
        if(empty($interest)) {
            echo "<font color='red'>Interest field is empty.</font><br/>";
        }
        
        if(empty($useful)) {
            echo "<font color='red'>Useful field is empty.</font><br/>";
        }
        
        if(empty($recommend)) {
            echo "<font color='red'>Recommend field is empty.</font><br/>";
        }
        
        if(empty($era)) {
            echo "<font color='red'>Era field is empty.</font><br/>";
        }
        
        if(empty($suggestions)) {
            echo "<font color='red'>Suggestions field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {    
        //updating the table
        $result = mysqli_query($link, "UPDATE results SET name='$name',email='$email',knowledge='$knowledge',interest='$interest',useful='$useful',recommend='$recommend',era='$era',suggestions='$suggestions' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($link, "SELECT * FROM results WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $email = $res['email'];
    $knowledge = $res['knowledge'];
    $interest = $res['interest'];
    $useful = $res['useful'];
    $recommend = $res['recommend'];
    $era = $res['era'];
    $suggestions = $res['suggestions'];
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <?php 
    $title = "Edit Data";
    include "../inc/admin-head.php";?>

<body class="edit-page">

  <?php 
    include "../inc/admin-nav.php"
    ?>

    <img src="../images/survey.jpg" class="quill">

    <article class="survey">

    <header id="header">
        <h1>Subscribe today.</h1>
        <div>Like What You Learned? Sign Up for our Weekly Newsletter!</div>
    </header>

      <h2>Sign Up Info:</h2>
        <form method="post" action="process.php" name="sign-up-form">
          <fieldset class="user">
            <legend>User Info</legend>
            <div>
              <label for="name" class="fixed">Name:</label>
              <input type="text" name="name" id="name" value="<?php echo $name;?>">
            </div>
            <div>
              <label for="email" class="fixed">Email:</label>
              <input type="email" name="email" id="email" value="<?php echo $email;?>">
            </div>
          </fieldset>

           <fieldset class="user">
            <legend>User Background</legend>
            <h3>How Would you Rate your Knowledge of Classical Music? </h3>
            <div>
              <label for="knowledge1">One (lowest) </label>
              <input type="radio" name="knowledge" id="knowledge1" value="1">
            </div>
            <div>
              <label for="knowledge2">Two</label>
              <input type="radio" name="knowledge" id="knowledge2" value="2">
            </div>
            <div>
              <label for="knowledge3">Three</label>
              <input type="radio" name="knowledge" id="knowledge3" value="3">
            </div>
            <div>
              <label for="knowledge4">Four</label>
              <input type="radio" name="knowledge" id="knowledge4" value="4">
            </div>
            <div>
              <label for="knowledge5">Five (highest) </label>
              <input type="radio" name="knowledge" id="knowledge5" value="5">
            </div>

            <h3>How Would you Rate your Interest in Classical Music? </h3>
            <div>
              <label for="interest1">One (lowest) </label>
              <input type="radio" name="interest" id="interest1" value="1">
            </div>
            <div>
              <label for="interest2">Two</label>
              <input type="radio" name="interest" id="interest2" value="2">
            </div>
            <div>
              <label for="interest3">Three</label>
              <input type="radio" name="interest" id="interest3" value="3">
            </div>
            <div>
              <label for="interest4">Four</label>
              <input type="radio" name="interest" id="interest4" value="4">
            </div>
            <div>
              <label for="interest5">Five (highest) </label>
              <input type="radio" name="interest" id="interest5" value="5">
            </div>
            </fieldset>

          <fieldset class="user">
            <legend>User Feedback</legend>
            <h3>Did you find our information useful? </h3>
            <div>
              <label for="usefulyes">Yes</label>
              <input type="radio" name="useful" id="usefulyes" value="Yes">
            </div>
            <div>
              <label for="usefulno">No</label>
              <input type="radio" name="useful" id="usefulno" value="No">
            </div>
            <div>
              <label for="usefulsomewhat">Somewhat</label>
              <input type="radio" name="useful" id="usefulsomewhat" value="Somewhat">
            </div>
            <h3>Would you recommend us to a friend?</h3>
            <div>
              <label for="recommendyes">Yes</label>
              <input type="radio" name="recommend" id="recommendyes" value="Yes">
            </div>
            <div>
              <label for="recommendno">No</label>
              <input type="radio" name="recommend" id="recommendno" value="No">
            </div>
            <div>
              <label for="recommendmaybe">Maybe</label>
              <input type="radio" name="recommend" id="recommendmaybe" value="Maybe">
            </div>
          </fieldset>

          <fieldset class="user">
            <legend>Help Us Help You</legend>
            <h3>What era would you like us to cover next?</h3>
            <div>
              <label for="baroque">Baroque</label>
              <input type="radio" name="era" id="baroque" value="Baroque">
            </div>
            <div>
              <label for="romantic">Romantic</label>
              <input type="radio" name="era" id="romantic" value="Romantic">
            </div>
            <div>
              <label for="neoclassical">NeoClassical</label>
              <input type="radio" name="era" id="neoclassical" value="NeoClassical">
            </div>
            <h3>What else would you like us to see? Specific musicians or pieces? Let us know how to improve!</h3>
            <div>
              <textarea name="suggestions" id="suggestions" value="<?php echo $suggestions;?>"></textarea>
            </div>
          </fieldset>


          <div class="user">
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="Submit" value="Update" id="update"></td>
          </div>


        </form>  

    </article>

  </body>
</html>
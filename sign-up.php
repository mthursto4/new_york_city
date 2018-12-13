<!DOCTYPE html>
<html lang="en-US">
  <?php 
    $title = "Sign Up";
    include "inc/head.php";?>


  <body>

  <?php 
  include "inc/nav.php"
  ?>

    <img src="images/survey.jpg" class="quill">

    <article class="survey">

    <header id="header">
      	<h1>Subscribe today.</h1>
      	<div>Like What You Learned? Sign Up for our Weekly Newsletter!</div>
    </header>

      <h2>Sign Up Info:</h2>
        <form method="post" action="admin/process.php" name="sign-up-form">
          <fieldset class="user">
            <legend>User Info</legend>
            <div>
              <label for="name" class="fixed">Name:</label>
              <input type="text" name="name" id="name">
            </div>
            <div>
              <label for="email" class="fixed">Email:</label>
              <input type="email" name="email" id="email">
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
              <textarea name="suggestions" id="suggestions"></textarea>
            </div>
          </fieldset>


          <div class="user">
            <input type="submit" name="Submit" value="You're done! Submit!">
          </div>

          <div><a href="admin/login.php" class="admin">Admin</a></div>

        </form>  

    </article>

  </body>

</html>

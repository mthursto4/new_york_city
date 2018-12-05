<?php
include "inc/html-top.inc"
?> 

  <body>

  <?php 
  include "inc/nav.inc"
  ?>

    <img src="images/quill.jpeg">

    <header>
      <h1>Subscribe today.</h1>
      <div>Like What You Learned? Sign Up for our Weekly Newsletter!</div>
    </header>

    <article>
      <h2>Sign Up Info</h2>
        <form method="post" action="form-processor.php">
          <fieldset>
            <legend>User Info</legend>
            <div>
              <label for="name" class="fixed">Name:</label>
              <input type="text" name="name" id="name">
            </div>
            <div>
              <label for="dob" class="fixed">Date of Birth:</label>
              <input type="date" name="dob" id="dob">
            </div>
            <div>
              <label for="email" class="fixed">Email:</label>
              <input type="email" name="email" id="email">
            </div>
          </fieldset>

          <fieldset>
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
  
          <fieldset>
            <legend>Helpful Suggestions</legend>
            <h3>What else would you like to know about the Classical Era? Leave a note for us below!</h3>
            <div>
              <textarea name="feedback" id="feedback"></textarea>
            </div>
          </fieldset>

          <div>
            <input type="submit" value="You're done! Submit!">
          </div>

        </form>  

    </article>


  </body>

</html>

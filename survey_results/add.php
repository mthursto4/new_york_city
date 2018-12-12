<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
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
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO results(name,email,knowledge,interest,useful,recommend,era,suggestions) VALUES('$name','$email','$knowledge','$interest','$useful','$recommend','$era','$suggestions',)");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='../admin/welcome.php'>View Result</a>";
    }
}
?>
</body>
</html>
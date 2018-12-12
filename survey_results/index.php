<!-- Attribution: Most of this code is from http://blog.chapagain.com.np/very-simple-add-edit-delete-view-in-php-mysql/ -->

<?php
//including the database connection file
include_once("../admin/config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM results ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM results ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="add.html">Add New Data</a><br/><br/>
 
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
</body>
</html>
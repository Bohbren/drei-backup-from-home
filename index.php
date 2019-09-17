<?php
require_once('database.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <body>
        <main>
            <h1>Register Here!</h1>
            <form action="confirmation.php" method="post">

            <label>First Name:</label>
            <input type="text" name="fName"><br>

            <label>Last Name:</label>
            <input type="text" name="lName"><br>

            <label>Username:</label>
            <input type="text" name="uName"><br>

            <label>Email:</label>
            <input type="text" name="email"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Register"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
        
        </main>                
        <footer>
                            
        </footer>
    </body>
</html>

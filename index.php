<?php
require_once('database.php');
if (!isset($firstError)) {
    $firstError = "";
}
if (!isset($lastError)) {
    $lastError = "";
}
if (!isset($userError)) {
    $userError = "";
}
if (!isset($emailError)) {
    $emailError = "";
}
if (!isset($firstName)) {
    $firstName = "";
}
if (!isset($lastName)) {
    $lastName = "";
}
if (!isset($userName)) {
    $userName = "";
}
if (!isset($email)) {
    $email = "";
}
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
            <input type="text" name="fName" value="<?php echo $firstName ?>">
            <?php echo $firstError ?> <br>

            <label>Last Name:</label>
            <input type="text" name="lName" value="<?php echo $lastName ?>">
            <?php echo $lastError ?><br>

            <label>Username:</label>
            <input type="text" name="uName" value="<?php echo $userName ?>">
            <?php echo $userError ?><br>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <?php echo $emailError ?><br>

            <label>&nbsp;</label>
            <input type="submit" value="Register"><br>
        </form>
        <p><a href="displayUsers.php">View Users In Database</a></p>
        
        </main>                
        <footer>
                            
        </footer>
    </body>
</html>

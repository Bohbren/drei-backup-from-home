<?php
require 'database.php';

$queryDisplayAll = "SELECT * FROM drei_project_one";

$statement = $db->prepare($queryDisplayAll);

$statement->execute();
$statement->closeCursor();
        
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <body>
        <main>
            <p><?php echo $statement; ?></p>
        
        </main>                
        <footer>
                            
        </footer>
    </body>
</html>

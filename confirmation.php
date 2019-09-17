<?php
$firstName = filter_input(INPUT_POST, 'fName');
$lastName = filter_input(INPUT_POST, 'lName');
$userName = filter_input(INPUT_POST, 'uName');
$eMail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// Validate inputs
if ($firstName == null){
    $error = "Enter your First Name";
}
if($lastName == null){
    $error = "Enter your Last Name";
}
if($userName == null){
    $error = "Enter your User Name";
}
if($eMail == null){
    $error = "Enter your Email";
}

//        || $category_id == false ||
//        $code == null || $name == null || $price == null || $price == false) {
//    $error = "Invalid product data. Check all fields and try again.";
//    include('error.php');
//} else {
//    require_once('database.php');
//
//    // Add the product to the database  
//    $query = 'INSERT INTO products
//                 (categoryID, productCode, productName, listPrice)
//              VALUES
//                 (:category_id, :code, :name, :price)';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':category_id', $category_id);
//    $statement->bindValue(':code', $code);
//    $statement->bindValue(':name', $name);
//    $statement->bindValue(':price', $price);
//    $statement->execute();
//    $statement->closeCursor();
//
//    // Display the Product List page
//    include('index.php');

?>


<?php
require 'database.php';
$firstName = filter_input(INPUT_POST, 'fName');
$lastName = filter_input(INPUT_POST, 'lName');
$userName = filter_input(INPUT_POST, 'uName');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$bool = true;
// Validate inputs
if ($firstName == null){
    $firstError = "Enter your First Name";
    $bool = false;
}
if($lastName == null){
    $lastError = "Enter your Last Name";
    $bool = false;
}
if($userName == null){
    $userError = "Enter your User Name";
    $bool = false;
}
if($email == null){
    $emailError = "Enter your Email";
    $bool = false;
}
if(!$bool){
include('index.php');
}
//todo:
//compare username/email to database

$query = "INSERT INTO drei_project_one(userName, firstName, lastName, email) "
        .    "VALUES(:userName, :firstName, :lastName, :email);";

$statement = $db->prepare($query);
$statement->bindValue(':userName', $userName);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':email', $email);

$statement->execute();
$statement->closeCursor();
        
        
?>


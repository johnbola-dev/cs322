<?php

require("../_includes/connection.php");

// PAGE VARIABLES
$error = false;
$info = false;
$message = "";



if(isset($_POST['submit']))
{
    $email =  $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];


    if($pass1 != $pass2)
    {
        $error = true;
        $message =  "Password Did not Match!";
        exit();
    }

    $result = insertdata($email,$pass1, $lastname,$firstname,$middlename);

    if($result == 1)
    {
        $info = true;
        $message = "Sucessfully registered";
    }

}



function insertdata($email,$pass1, $lastname,$firstname,$middlename)
{

    
    $database = new Connection();
    $db = $database->open();

    $account_type = 'client';
    $account_status = 'active';
    $pass = password_hash($pass1, PASSWORD_DEFAULT);


    $stmt = $db->prepare('INSERT INTO tbl_accounts (email, pass, account_type, account_status, lastname, firstname, middlename)
                            VALUES (:email, :pass, :account_type, :account_status, :lastname, :firstname, :middlename)');
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->bindParam(':account_type', $account_type);
    $stmt->bindParam(':account_status', $account_status);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':middlename', $middlename);
    $stmt->execute();
    $rowCount = $stmt->rowCount();

    return $rowCount;


}
<?php
require("../_includes/connection.php");

// DEFAULT VARIABLE
$error = false;
$message = '';


if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $result = checkLogin($email,$pass);

    if($result == 0)
    {
        $error = true;
        $message = "Invalid Email or Password!";
    }
    if($result == 1)
    {
        session_start();
        $_SESSION['auth']  = true;
        header('location:../dashboard');    
    }



}

function checkLogin($email, $pass)
{
    $database = new Connection();
    $db = $database->open();

    $stmt = $db->prepare('SELECT email, pass  FROM tbl_accounts WHERE email=:email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $res = $stmt->fetchAll();
    $rowCount = $stmt->rowCount();

    // Check the RowCount
    // echo $rowCount;

    if($rowCount == 1)
    {
        // SEE IF THE CONDITION IS TRUE
        // echo "<pre>";
        // var_dump($res);
        $hash = $res[0]['pass'];
        if(password_verify($pass, $hash))
        {
            return 1;
        } else{
            return 0;
        }


    }
}


<?php
    session_start();
    if(!isset($_SESSION['auth']))
    {
        header('location:../login');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
<h1>Dashboard</h1>

<a href="../logout/" class="btn btn-primary btn-sm">Logout</a>
</body>
</html>
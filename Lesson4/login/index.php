<?php
    require("../includes/connection.php");


    if(isset($_POST['submit']))
    {
        // code when button is clicked

        $studentid = $_POST['studentid'];
        $pass = $_POST['password'];

        // echo "STudentID:" . $studentid . "<br>";
        // echo "Password: " . $pass . "<br>";

        try {
            $database = new Connection();
            $db = $database->open();
    
            $stmt = $db->prepare('SELECT * FROM tbl_students_profile 
                                    WHERE studentid=:studentid AND pass=:pass');
            $stmt->bindParam(':studentid', $studentid);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $user = $stmt->fetch();
            $rowCount = $stmt->rowCount();
            
            if($rowCount == 1)
            {
                session_start();
                $_SESSION['auth'] = true;
                header("location:../dashboard");
            }
            else {
                echo "Invalid StudentID or Password";
            }
        } catch (PDOException $e) {
    
            $output = $e;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-4 offset-4 mt-5">
    <form method="POST">
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" name="studentid" class="form-control" id="floatingInput" placeholder="2019-12345">
      <label for="floatingInput">Student ID</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <hr>
    
    <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
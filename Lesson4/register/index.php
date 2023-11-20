<?php

include('register.function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="col-md-5 offset-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-3">Register</h1>

                    <?php
                    if ($error == true) {
                    ?>
                        <div class="alert alert-danger mb-3" role="alert">
                           <?php echo $message; ?>
                        </div>
                    <?php
                    }
                    ?>
                     <?php
                    if ($info == true) {
                    ?>
                        <div class="alert alert-info mb-3" role="alert">
                           <?php echo $message; ?>
                        </div>
                    <?php
                    }
                    ?>

                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="pass1" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                            <input type="password" name="pass2" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lastname</label>
                            <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="Lastname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                            <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Firstname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Middlename</label>
                            <input type="text" name="middlename" class="form-control" id="exampleFormControlInput1" placeholder="Middlename">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="exampleFormControlInput1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
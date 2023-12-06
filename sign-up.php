<?php
include_once "partials/header.php"

?>

<!DOCTYPE html>
<html>
<head>

</head>
<!--rel="stylesheet"-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div style="padding:50px; margin-top: 3em;">
        <h1>Sign up for an account!</h1>

        <form action="sign-up-action.php" method="post">
            <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label">Username</label>
                <input name="username" type="username" class="form-control" id="exampleInputUsername1">
                <!--textbox for user to enter username-->
            </div>
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                <!--textbox for user to enter email-->
            </div>
           

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                <!--box for user to enter password-->

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
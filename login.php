<?php
include_once "partials/header.php"

?>

<!DOCTYPE html>
<html>
    <head>
    <style>
        body{
    background-color: #172B4D;
    color:aliceblue;
}
/*this css only works internally not externally*/
        </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!--bootstrap start-->
</head>
<body>
    <div style="padding:50px; margin-top: 3em;">
        <h1>Log in</h1>

        <?php if (isset($_GET["msg"]) && $_GET["msg"] =="failed"): ?>
            <h3 style="background-color:#E4362F; border-radius:10px;">Incorrect username or password </h3>
        <?php endif ?>
        <!--tells the user their username or password is wrong-->

        <form action="login-action.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail">
                <!--textbox for user to enter email-->
            </div>
           

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                <!--box for user to enter password-->

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
        <?php if(isset($_GET["msg"]) && $_GET["msg"]=="account-made"): ?>
        <div>
            Account made
        </div>
        <!--if an account has been made the user will be taken to this page and this message will be present on screen-->
    <?php endif ?>

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <!--bootstrap end-->


</body>
</html>
<?php
session_start();
include_once "db.php";
include_once 'user.php';

if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
};

include_once "partials/header.php";


?>
<html>

    <head>
        <title>Change password</title>
    </head>
    <body>
    <div style="padding:50px; margin-top: 3em;">
    <h1>Change your password</h1>
        <form action="change_password_action.php" method="post">
            <div class="mb-3">
                <p>Write your new password here</p>
                <input type="password" name="new_password" class="form-control" style="width:500px" id="new_password">
            </div>

            <br/>
        
            <div class="mb-3">
                <p>Rewrite your password here</p>
                <input type="password" name="password_check" class="form-control" style="width:500px" id="password_check">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!--form for changing the password-->

        <?php if(isset($_GET['msg']) && $_GET['msg']=="wrong"):?>
            <div><p>Password does not match</p></div>
        <?php elseif(isset($_GET['msg']) && $_GET['msg']=="changed"):?>
            <p>Password changed</p>
        <?php endif ?>
            <!--after pressing the button it will send a signal to change_password_action.php 
    and that would send a GET message back stating whether or not the password changed-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
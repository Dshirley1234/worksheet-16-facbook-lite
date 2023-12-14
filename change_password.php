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
<br/>
<br/>
    <body>
    <form action="change_password_action.php" method="post">
        <input type="password" name="new_password" class="form-control" id="new_password">
        <input type="password" name="password_check" class="form-contorl" id="password_check">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if(isset($_GET['msg']) && $_GET['msg']=="wrong"):?>
       <div><p>Password does not match</p></div>
    <?php elseif(isset($_GET['msg']) && $_GET['msg']=="changed"):?>
        <p>Password changed</p>
    <?php endif ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
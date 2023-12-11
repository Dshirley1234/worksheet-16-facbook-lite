<?php
session_start();
include_once "partials/header.php";
include_once "db.php";





?>
<html>

    <head>
        <title>Change password</title>
    </head>

    <body>
    <form action="#" method="post">
        <input type="password" name="new_password" class="form-control" id="new_password">
        <input type="password" name="password_check" class="form-contorl" id="password_check">
        <button type="submit" class="btn btn-primary">Submit</button>
    </body>
</html>
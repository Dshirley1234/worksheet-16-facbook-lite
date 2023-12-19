<?php

session_start();
session_destroy();
header("Location: home.php")
?>
<!--kills the session and logs the usr out-->
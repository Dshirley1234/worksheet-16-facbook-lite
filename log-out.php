<?php

session_start();
session_destroy();
header("Location: home1.php")
?>
<!--kills the session and logs the usr out-->
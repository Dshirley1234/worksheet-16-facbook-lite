<?php
include_once 'db.php';
include_once 'user.php';
include_once 'partials/header.php';
session_start();

$logged_in = false;
if (isset($_SESSION['user'])) {
    $logged_in = true;
    $user = unserialize($_SESSION['user']);
}

?>

<html>
    <head></head>

    <body>
<?php if ($logged_in): ?>
    <p>
        Hello <?= $user->username; ?>
    </p>
    <p>
        <a href="log-out.php">Log out</a>
    </p>
    <p>
        <a href="log-in.php">Log in</a>
    </p>

    <p>
        <a href="sign-up.php">Sign up for an account</a>
    </p>

<?php endif?>
    </body>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" href="css/whole_page.css">
<style>
    .right {
        float:right;
    }
    /*this is css to force the dropdown menu to stick to the right*/
    /*It doesn't want to work externally*/
</style>


<div class="navigation-bar">
    <a href="home.php">Home</a>
    <!--options to go to home page, login and sign-up-->
    <div class="right">
    <?php if(isset($_SESSION["user"])):?>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
        <?= $user->username; ?>
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="color:black;" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" style="color:black;" href="log-out.php">Log out</a></li>
        </ul>
    </div>
    <!--A drop down menu for the user to sign out with.
     If there is no session this does not appear-->
    <?php elseif(! isset($_SESION["user"])):?>
        <a href="login.php">Log in</a>
        <a href="sign-up.php">Sign-up</a>
    <?php endif; ?>

</div>
</div>

<!--all this code is for the nav bar a the top of the screen-->

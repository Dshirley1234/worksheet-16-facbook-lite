<?php
if (isset($_POST["see_more"])) {
    $_SESSION['count'] +=20;
};

$chatlimit = $_SESSION['count'];
$sql = "SELECT messages.content, messages.date, dbpwusers2.username  #selects the message content, the date it was sent and the username from dpbwusers2 of who sent it
FROM messages
INNER JOIN dbpwusers2 ON messages.id = dbpwusers2.id  #join messages id column with dbpwusers2 id column to get the coresponding usernames
ORDER BY date DESC LIMIT ".$chatlimit;  #limit the chat to only show the top 20 messages
$messresult = $connection->query($sql);
?>

<link rel="stylesheet" href="css/chat.css">
<div class="container chatcontainer">
    <?php while($row = $messresult->fetch_array(MYSQLI_ASSOC)): ?>
    <h5><?= $row["username"]?></h5>
    <div class="msg_content">
        <p style="font-size:20px";><?= $row["content"] ?></p>
        <p class="date" style="color:#669A9B;"><?= $row["date"]?></p>
    </div>
<!--for each row in the database display them on screen in a certain format.-->
        <br/>
    <?php endwhile; ?>

    <form method="post">
        <input type="submit" value="See more" name="see_more" class="btn btn-primary"></button>
    </form>


</div>
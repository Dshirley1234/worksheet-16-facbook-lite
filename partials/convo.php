<?php

$sql = "SELECT messages.content, messages.date, dbpwusers2.username  #selects the message content, the date it was sent and the username from dpbwusers2 of who sent it
FROM messages
INNER JOIN dbpwusers2 ON messages.id = dbpwusers2.id  #join messages id column with dbpwusers2 id column to get the coresponding usernames
ORDER BY date DESC LIMIT 20";  #limit the chat to only show the top 20 messages
$messresult = $connection->query($sql);
?>


<div class="container" style="overflow:auto; width:40%; height:500px; ">
    <?php while($row = $messresult->fetch_array(MYSQLI_ASSOC)): ?>
    <h5><?= $row["username"]?></h5>
    <div class="msg_content" style="background-color:#056262;">
        <p style="font-size:20px";><?= $row["content"] ?></p>
        <p class="date" style="color:#669A9B;"><?= $row["date"]?></p>
    </div>
        <br/>
    <?php endwhile; ?>
    <!--for each row in the database display them on screen in a certain format.-->
    </div>
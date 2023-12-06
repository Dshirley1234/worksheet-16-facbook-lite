<?php
//$sql = "SELECT * FROM messages ORDER BY date DESC";
//$messresult = $connection->query($sql);

$sql = "SELECT messages.content, messages.date, dbpwusers2.username 
FROM messages
INNER JOIN dbpwusers2 ON messages.id = dbpwusers2.id
ORDER BY date DESC LIMIT 20";
$messresult = $connection->query($sql);
?>


<div class="container" style="  overflow: scroll; width:40%; height:500px;">
    <?php while($row = $messresult->fetch_array(MYSQLI_ASSOC)): ?>
    <h6><?= $row["username"]?></h6>
    <div class="msg_content">
        <p><?= $row["content"] ?></p>
        <p class="date"><?= $row["date"]?></p>
    </div>
        <br/>
    <?php endwhile; ?>
    </div>
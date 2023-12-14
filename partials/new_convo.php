<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/chat.css"> 
<body>
    <div class="container" style="margin: 0 auto;">
<div id ="messages" class="container chatcontainer"></div>
<button class="btn btn-primary">get next</button>
</div>

<script>
    var number = 20;
    var last_id = 0;
    function get_messages(){
        $.getJSON("get_message.php?id=" + last_id + "&number=" + number, function(data){
            var username = data[last_id]["username"];
            var content = data[last_id]["content"];
            var date = data[last_id]["date"];
            $("#messages").append("<div class='msg_content'> <h5> "+username+" </h5> <p style='font-size:20px'> "+ content+"</p> <p class='date' style='#669A9B'> "+ date + "</p> </div> <br/>");
            last_id = last_id+1;
        });
    }

    function update() {
        get_messages();
        setTimeout(update, 0.1);
    }

    $(document).ready(function(){
        update();
    });

    $("button").click(function(){
        number = number+ 5;
        $("#messages").empty();
        last_id = 0;
  });
</script>

</body>
</html>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/chat.css"> 
<body>
<p>messages</p>
<div id ="messages" class="chatcontainer"></div>
<button>get next</button>

<script>
    var last_id = 0;
    function get_messages(){
        $.getJSON("get_message.php?id=" + last_id, function(data){
            $("#messages").append("<div class='msg_content'>"+data[last_id]["content"]+"</div> <br/>");
            last_id = last_id+1;
        });
    }

    function update() {
        get_messages();
        setTimeout(update, 300);
    }
    $("button").click(function(){
        update();
    });
   

</script>
</body>
</html>
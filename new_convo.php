<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body>
<p>messages</p>
<div id ="messages"></div>
<button>get next</button>

<script>
    var last_id = 0;
    function get_messages(){
        $.getJSON("get_message.php?id=" + last_id, function(data){
        $("#messages").append("<div>"+data[1]+"</div>");
        last_id = last_id + 1;
        });
    }
    $("button").click(function(){
        get_messages();
    });

</script>
</body>
</html>
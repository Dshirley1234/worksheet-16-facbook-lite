<?php

class Message{
    public $message = "";
    public $date = "";
    public $user_id = "";
    public $conneciton;

    function __construct($connection, $message, $date, $user_id) {
        $this->message = mysqli_real_escape_string($connection, $message);
        $this->date = mysqli_real_escape_string($connection, $date);
        $this->user_id = mysqli_real_escape_string($connection, $user_id);
        $this->connection = $connection;
    }

    function insert(){
        $sql ="
        INSERT INTO messages (
            content,
            date,
            id)
            VALUES (                                     
                '{$this->message}',
                '{$this->date}',
                '{$this->user_id}'
            )
        ";
        $sqlQuery=$this->connection->query($sql);

        if(! $sqlQuery){
            die("MySQL query failed" . mysql_error($this->connection));
        };
    }
}
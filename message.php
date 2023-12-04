<?php

class Message{
    public $message = "";
    public $date = "";
    public $time = "";
    public $user_id = "";
    public $conneciton;

    function __construct($connection, $message, $date, $time,$user_id) {
        
    }
}
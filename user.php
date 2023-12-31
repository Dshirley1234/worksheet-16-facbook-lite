<?php

class User{
    public $username = "";
    public $email = "";
    public $password = "";
    public $password_hash = "";
    public $token = "";
    public $authenticated = false;
    private $connection;

    function __construct($connection, $email, $password, $username) {
        $this->username = mysqli_real_escape_string($connection, $username);
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);
        $this->token = md5(rand().time());
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);
        $this->connection = $connection;
    }
    //creates the users class
    function insert() {
        $sql = "
        INSERT INTO dbpwusers2 (
                email,
                password,
                token,
                is_active,
                username
            ) VALUES (
                '{$this->email}',
                '{$this->password_hash}',
                '{$this->token}',
                '0',
                '{$this->username}'
            )
        ";
        //sql query
        $sqlQuery = $this->connection->query($sql);
    
        if(! $sqlQuery){
            die("MySQL query failed" . mysqli_error($this->connection));
        };
        //uploads the user class created above and uploads it to the dbpwusers2 database
    }

    function authenticate() {
        $sql = "
        SELECT id, email, password, token, is_active, username
        FROM dbpwusers2
        WHERE email=\"{$this->email}\";
        ";

        
        $result = $this->connection->query($sql);
        if ($row = $result->fetch_assoc()) {

            if (password_verify($this->password, $row["password"])) {
                $this->authenticated = true;
            }
        }
        //user authentication
    }

    function is_logged_in(){
        return $this->authenticated;
    }
}

<?php
include_once "Bcrypt.php";
define('HOST', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'amarishop_website');

// class DB start
class Database
{
    private $connection;

    // Constructor
    public function __construct()
    {
        $this->open_db_connection();
    }

    // Creating connection with db
    public function open_db_connection()
    {
        $this->connection = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);

        if (mysqli_connect_error()) {
            die('Connection Error: ' . mysqli_connect_error());
        }
    }

    // Running SQL query on db
    public function query($sql)
    {
        $result = $this->connection->query($sql);
        $result_array = [];
        if (!$result) {
            die('Query fails : ' . $sql);
        }
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $result_array = $row;
            }
            return $result_array;
        } else {
            return $result_array;
        }
    }

    // Checking if string is in proper format
    public function escape_value($value)
    {
        $value = $this->connection->real_escape_string($value);
        return $value;
    }

    // Closing connection
    public function close_connection()
    {
        $this->connection->close();
    }

    public function create_user($email, $pass)
    {
        $bcrypt = new Bcrypt();
        $hashed_pass = $bcrypt->hashPassword($pass);
        $sql = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$hashed_pass')";
        $result = $this->connection->query($sql);
        return $result;
    }
    public function validate_user(){
        $email=&$_SESSION['email'];
        $pass=&$_SESSION['pass'];
        if($email && $pass){
            $res=$this->login($email,$pass);
            return $res;
        }else{
            return 0;
        }
        
    }
    public function login($email, $pass)
    {
        $bcrypt = new Bcrypt();
        $sql = "SELECT `email`, `password` FROM `users` WHERE `email`='$email'";
        $result = $this->query($sql);
        $res = 0; //0 for Invalid user
        if (sizeof($result) > 0) {
            if ($bcrypt->checkPassword($pass, $result['password'])) {
                $res = 1; //1 for valid user
                $_SESSION['email']=$email;
                $_SESSION['pass']=$pass;
            } else {
                $res = -1; //-1 for Wrong password
            }
        } else {
            $res = 2; //2 for Account not created
        }
        return $res;
    }
    public function logout(){
        session_destroy();
    }
} // Class ends

$database = new Database();

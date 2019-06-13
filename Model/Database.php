<?php
class Database
{
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($filename)
    {
        if (is_file($filename)) {
            include $filename;
        } else {
            throw new Exception("Error");
        }
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }
    private function connect()
    {
        $connect_error = 'Sorry, we\'re experiencing connection issues.';
        $con = mysqli_connect('localhost', 'root', 'root', 'login');
        // $db = mysqli_select_db('login') or die($connect_error);

        if (!mysqli_connect($this->host, $this->username, $this->password)) {
            throw new Exception("Error: not connect to server");
        }
        if (!mysqli_select_db($con, 'login')) {
            throw new Exception("Error: Database not selected");
        }
    }
    public function close()
    {
        mysqli_close();
    }
}
// mysqli_select_db($con, 'phpcadet') or die(mysqli_error($con));

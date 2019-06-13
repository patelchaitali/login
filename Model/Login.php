<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Login
{
    private $username;
    private $password;
    private $con;

    public function __construct($username, $password)
    {
        $this->setdata($username, $password);
        $this->connecttodb();
        $this->getdata();
    }
    private function setdata($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    private function connecttodb()
    {
        include 'model/Database.php';
        $config = "include/config.php";
        $this->con = new Database($config);
    }
    public function getdata()
    {
        // $s = "select * from user where username = '$this->username' && password = '$this->password'";

        $myConnection= mysqli_connect("localhost", "root", "root", "login") or die("could not connect to mysql");
        $sqlCommand="select * from user where username = '$this->username' && password = '$this->password'";
        $result=mysqli_query($myConnection, $sqlCommand) or die(mysqli_error($myConnection));

        // $result = mysqli_query($this->con, $s);
        // print_r($result);
        // exit;
        $num = mysqli_num_rows($result);
        
        if ($num == 1) {
            echo "Login successfully";
        } else {
            echo "Failed to Login!";
        }
    }
    public function close()
    {
        $this->con->close();
    }
}

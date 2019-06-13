<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// if (!isset($_SESSION['username'])) {
//     include './login.php';
//     die();
// // }
 ?>
<html>
<head>
<title>Login Pagee</title>

</head>
<body>
  <h1>Login Page</h1>
  <div id="frm">
    <form action="controller.php" method="POST">
      <p>
        <label>Username:</label>
        <input type="text" id="user" name="username" autocomplete="off">
      </p>
      <p>
        <label>Password:</label>
        <input type="password" id="pass" name="password">
      </p>
      <p>
        <input type="submit" id="btn" name="submit" value="Login">
        <br><br>
        <a href="registration.php">Registration here...</a>
      </p>
    </form>


  </div>
</body>
</html>

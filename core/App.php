<?php

include dirname(__FILE__) . '/config.php';

class App
{
  function __construct()
  {
  }

  public static function connect()
  {
    $conn = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . "", DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }

  public static function login($username, $password)
  {
    $conn = self::connect();
    $login = [
      "status" => 0,
      "user" => "",
      "user_msg" => "",
      "pass_msg" => "",
      "msg" => ""
    ];
    $pass = "";
    if (empty(trim($username))) {
      $login["user_msg"] = "Please enter username.";
    } else {
      $login["user"] =  trim($username);
    }
    if (empty(trim($password))) {
      $login["pass_msg"] = "Please enter your password.";
    } else {
      $pass = trim($password);
    }
    if (empty($login["user_msg"]) && empty($login["pass_msg"])) {
      if ($stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username")) {
        $stmt->bindParam(':username', $param_username);
        $param_username = $login["user"];
        if ($stmt->execute()) {
          if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $user = $row['username'];
            $hashed_password = $row['password'];
            if ($user != null) {
              if (password_verify($pass, $hashed_password)) {
                $_SESSION['username'] = $username;
                $login["status"] = 1;
              } else {
                $login["pass_msg"] = "The password you entered was not valid.";
              }
            }
          } else {
            $login["user_msg"] = "No account found with that username.";
          }
        } else {
          $login["msg"] = "Oops! Something went wrong. Please try again later.";
        }
      }
      $stmt->closeCursor();
    }
    $conn = null;
    return $login;
  }
}

?>

<?php

include 'config.php';

class Database
{
  function __construct()
  {
  }

  public static function connectMySql()
  {
    try {
      $conn = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . "", DBUSER, DBPASS);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      return null;
    }
  }


}

<?php
class DB
{
  private static $instance = NULl;
  public static function getInstance()
  {
    if (!isset(self::$instance)) {
          // Docker
          //  $servername = "db";
          //  $username = "user";
          //  $password = "Aa@12345";
          //  $dbname = "fashion";
      

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "btl_web_v2"; 
        
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      self::$instance = new mysqli($servername, $username, $password, $dbname);
      if (self::$instance->connect_error) {
        die("Connection failed: " . self::$instance->connect_error);
      }
      else{
        ;
      }
    }
    return self::$instance;
  }

}

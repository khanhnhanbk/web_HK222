<?php
class User
{

  public function all()
  {
    $conn= DB::getInstance();

    $sql = 'SELECT * FROM users';

    $stmt = $conn->prepare($sql);

    try{
      $stmt->execute();
      $res = $stmt->get_result();   
      
      return $res;
    }
    catch(mysqli_sql_exception $e){
      return $conn->error;
    };
    
  }
}
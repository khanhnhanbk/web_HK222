<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');
class UserModel extends BaseModel
{
  public function __construct()
  {
    parent::__construct();
    //$this->table = "users";
  }

  public function create(array $data = [])
  {
    $query = "INSERT INTO users (name, email, password, role) VALUES (?,?,?,?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("sssi", ...array_values($data));
    $stmt->execute();
    return $stmt->insert_id;
  }
  public function getDisplayedCourses(){
    $query = "SELECT * from courses where displayed=1";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->get_result();
  }
}

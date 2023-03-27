<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');
class UserModel extends BaseModel
{
  public function __construct()
  {
    parent::__construct();
  }

  public function create(array $data = [])
  {
    $query = "INSERT INTO users (username, email, password, role) VALUES (?,?,?,?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("sssi", ...array_values($data));
    $stmt->execute();

    $id = $this->conn->insert_id;

    // create in user_info
    $query = "INSERT INTO user_info (user_id) VALUES (?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->insert_id;
  }
  public function getBy(array $data = [])
  {
    $query = "SELECT * FROM users WHERE ";
    $i = 0;
    foreach ($data as $key => $value) {
      if ($i == 0) {
        $query .= "$key = '$value'";
      } else {
        $query .= " AND $key = '$value'";
      }
      $i++;
    }
    $result = $this->conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}

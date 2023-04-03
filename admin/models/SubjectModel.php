<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');

class SubjectModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }



    public function getAll()
    {
        $sql = "SELECT * FROM subjects";

        $result = $this->conn->query($sql);
        $subjects = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $subjects[] = $row;
            }
        }
        return $subjects;
    }
}

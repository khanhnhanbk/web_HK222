<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class UserController extends BaseController
{
  private $userModel;
  function __construct()
  {
    $this->folder = 'users';
    // create new variable

    $this->userModel = $this->model('UserModel');
  }
  public function profile()
  {
    $id = $_SESSION["user"]["id"];
    $result = $this->userModel->getById($id);
    $user = $result;
    $data = array('user' => $user);
    $this->render('profile', $data);
  }
  public function update()
  {
    if (isset($_POST['save-button'])) {
      $id = $_SESSION["user"]["id"];
      $f_name = escape($_POST['f_name']);
      $l_name = escape($_POST['l_name']);
      $gender = escape($_POST['gender']);
      $phone = escape($_POST['phone']);
      $address = escape($_POST['address']);
      $age = escape($_POST['age']);
      // save image avatar

      $avt = $_FILES['img1']['name'];
      $avt_tmp = $_FILES['img1']['tmp_name'];
      copy($avt_tmp, "public/images/$avt");
      // update user




      $this->userModel->update($id, $avt, $f_name, $l_name, $gender, $phone, $address, $age);
      header('Location:/user/profile');
    } else {
      $id = $_SESSION["user"]["id"];
      $result = $this->userModel->getById($id);
      $user = $result;
      $data = array('user' => $user);
      $this->render('update', $data);
    }
  }
  public function pw()
  {
    if (isset($_POST['save-button'])) {
      $id = $_SESSION["user"]["id"];
      $password = escape($_POST['password']);
      $password2 = escape($_POST['password2']);
      if ($password != $password2) {
        $_SESSION["error"] = "Password do not match";
        $this->render('pw', array(
          'title' => 'pw'
        ));
        exit();
      }
      $password = md5($password);
      $this->userModel->pwedit($id, $password);
      header('Location:/user/profile');
    } else {
      $this->render('pw', array(
        'title' => 'pw'
      ));
    }
  }
}

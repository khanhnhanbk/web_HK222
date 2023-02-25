<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class HomeController extends BaseController
{
  function __construct()
  {
    $this->folder = 'homes';
  }

  public function home()
  {
    $this->render('home');
  }

  public function user()
  {
    $userModel = $this->model('User');
    $user = $userModel->getAll();

    $this->render('user', ['user' => $user]);
  }

  
}

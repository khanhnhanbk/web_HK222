<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class PageController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {

    $this->render('home');
  }

  public function error()
  {
    $this->render('error');
  }
}

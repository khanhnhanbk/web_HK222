<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class CourseController extends BaseController
{
  function __construct()
  {
    $this->folder = 'courses';
  }

  public function home()
  {
    $this->render('home',[],'course_home');
  }
  public function detail(){
    $this->render('detail',[],'course_detail');
  }
  public function error()
  {
    $this->render('error');
  }
  
}

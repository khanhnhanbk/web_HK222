<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class EnrollController extends BaseController
{  
  private $enrollModel;
  private $table;
  function __construct()
  {
    $this->folder = 'enrolls';
    $this->table = 'orders';
    $this->enrollModel = $this->model('EnrollModel');
  }
  public function home()
  {
    $data = array();
    $orders=$this->enrollModel->getOrders();
    if (mysqli_num_rows($orders) > 0) {

        while ($row = mysqli_fetch_assoc($orders)) {
            
            $user=$this->enrollModel->getUserbyOrder(['id' => $row['user_id']]);
            $subject=$this->enrollModel->getSubjectbyOrder(['courses.id' => $row['course_id']]);
            $course=$this->enrollModel->getCoursebyOrder(['id' => $row['course_id']]);
            $newValues = array(
                'username' => '',
                'email' => '',
                'subject_name' => '',
                'course_name' => '',
                'price' => ''
            );
            $row = array_merge($newValues, $row);
            $row['username']=$user['username']; 
            $row['email']=$user['email'];
            $row['subject_name']=$subject['name'];
            $row['course_name']=$course['name'];
            $row['price']=$course['price'];
            $data[] = $row;
        }

 
        
    } 
   
    $this->render('home', $data);
  }

  public function reject()
  {
    error_reporting(0);
    if (isset($_POST['reject-order'])) {
        $id = $_POST['id'];
        $data = array();
        $order=$this->enrollModel->getOrderById($id);
        $row = mysqli_fetch_assoc($order);
        $user=$this->enrollModel->getUserbyOrder(['id' => $row['user_id']]);
        $subject=$this->enrollModel->getSubjectbyOrder(['courses.id' => $row['course_id']]);
        $course=$this->enrollModel->getCoursebyOrder(['id' => $row['course_id']]);
        $newValues = array(
            'username' => '',
            'email' => '',
            'subject_name' => '',
            'course_name' => '',
            'price' => ''
        );
        $row = array_merge($newValues, $row);
        $row['username']=$user['username']; 
        $row['email']=$user['email'];
        $row['subject_name']=$subject['name'];
        $row['course_name']=$course['name'];
        $row['price']=$course['price'];
        $data = $row;
        $this->render('reject', $data);
           
 
        
    } 
    if (isset($_POST['confirm-reject-order'])) {
        $id = $_POST['id-to-delete'];
        $this->enrollModel->deleteOrderById($id);
    } 

    header("Location: /admin/enroll");
  }
  public function approve()
  {
    error_reporting(0);
    if (isset($_POST['approve-order'])) {
        $id = $_POST['id'];
        $data = array();
        $order=$this->enrollModel->getOrderById($id);
        $row = mysqli_fetch_assoc($order);
        $user=$this->enrollModel->getUserbyOrder(['id' => $row['user_id']]);
        $subject=$this->enrollModel->getSubjectbyOrder(['courses.id' => $row['course_id']]);
        $course=$this->enrollModel->getCoursebyOrder(['id' => $row['course_id']]);
        $newValues = array(
            'username' => '',
            'email' => '',
            'subject_name' => '',
            'course_name' => '',
            'price' => ''
        );
        $row = array_merge($newValues, $row);
        $row['username']=$user['username']; 
        $row['email']=$user['email'];
        $row['subject_name']=$subject['name'];
        $row['course_name']=$course['name'];
        $row['price']=$course['price'];
        $row['user_id']=$user['id'];
        $row['course_id']=$course['id'];
        $data = $row;
        $this->render('approve', $data);
           
 
        
    } 
    if (isset($_POST['confirm-approve-order'])) {
        $id=$_POST['id-to-approve'];
        $user_id = $_POST['user-id-to-approve'];
        $course_id = $_POST['course-id-to-approve'];
        $this->enrollModel->insertEnrollment($user_id,$course_id);
        $this->enrollModel->deleteOrderById($id);
    } 
    header("Location: /admin/enroll");
  }
  public function detail()
  {
    if (isset($_POST['detail-order'])) {
        $id = $_POST['id'];
        $data = array();
        $order=$this->enrollModel->getOrderById($id);
        $row = mysqli_fetch_assoc($order);
        $user=$this->enrollModel->getUserbyOrder(['id' => $row['user_id']]);
        $subject=$this->enrollModel->getSubjectbyOrder(['courses.id' => $row['course_id']]);
        $course=$this->enrollModel->getCoursebyOrder(['id' => $row['course_id']]);
        $newValues = array(
            'username' => '',
            'email' => '',
            'subject_name' => '',
            'course_name' => '',
            'price' => ''
        );
        $row = array_merge($newValues, $row);
        $row['username']=$user['username']; 
        $row['email']=$user['email'];
        $row['subject_name']=$subject['name'];
        $row['course_name']=$course['name'];
        $row['price']=$course['price'];
        $data = $row;
        $this->render('detail', $data);

 
        
    } 
   
    
  }
}

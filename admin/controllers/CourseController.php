<?php

require_once(ADMIN_PATH . 'controllers/BaseController.php');
class CourseController extends BaseController
{
    private $subjectModel;
    private $courseModel;
    function __construct()
    {
        $this->folder = 'courses';
        $this->subjectModel = $this->model('SubjectModel');
        $this->courseModel = $this->model('CourseModel');
    }

    public function home()
    {

        $courses = $this->courseModel->getAllCourses();
        $data = array(
            'courses' => $courses,
        );
        $this->render('home', $data);
    }

    public function error()
    {
        $this->render('error');
    }
    public function getSubjectName($id)
    {
        if ($id == 1) return "Math";
        else if ($id == 2) return "Science";
        else return "Physics";
    }

    public function detail()
    {

        if (isset($_POST['detail-course-btn'])) {
            $id = $_POST['id'];
            $course = $this->courseModel->getById($id);
            $data = array(
                'course' => $course,
            );
        }
        $this->render('detail', $data);
    }
    public function delete()
    {
        if (isset($_POST['delete-course-btn'])) {
            $id = $_POST['id'];
            $this->courseModel->deleteById($id);
            header('Location: /admin/course/home');
        }
    }
    public function edit()
    {
        $id = $_GET['id'];
        $course = $this->courseModel->getById($id);
        $subjects = $this->subjectModel->getAll();
        $data = array(
            'subjects' => $subjects,
            'course' => $course,
        );
        $this->render('edit', $data);
        if (isset($_POST['save-button'])) {
            $name = $_POST['name'];
            $duration = $_POST['duration'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $description = $_POST['description'];
            $this->courseModel->editCourse($id, $name, $duration, $price, $image, $description);
            if (!headers_sent()) {
                header('Location: /admin/course/home');
            } else {
                echo '<script type="text/javascript">window.location.href="/admin/course/home"</script>';
            }
        }
    }
    public function add()
    {
        $subjects = $this->subjectModel->getAll();
        $data = array(
            'subjects' => $subjects,
        );
        $this->render('add', $data);
        if (isset($_POST['addCourseButton'])) {
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $duration = $_POST['duration'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $description = $_POST['description'];
            $this->courseModel->addCourse($name, $subject, $duration, $price, $image, $description);
            header('Location: /admin/course/home');
        }
    }
}

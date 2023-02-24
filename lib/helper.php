<?php

function slug($str)
{
    return $str;
}
function upload($field, $config = array())
{
    $options = array(
        'name' => '',
        'upload_path' => './',
        'allowed_exts' => '*',
        'overwrite' => TRUE,
        'max_size' => 0
    );
    $options = array_merge($options, $config); //Hợp nhất một hoặc nhiều mảng
    if (!isset($_FILES[$field]))
        return FALSE;
    $file = $_FILES[$field];
    if ($file['error'] != 0)
        return FALSE;
    $temp = explode(".", $file["name"]);
    $ext = end($temp); //Đặt con trỏ bên trong của một mảng thành phần tử cuối cùng của nó
    if ($options['allowed_exts'] != '*') {
        $allowedExts = explode('|', $options['allowed_exts']);
        if (!in_array($ext, $allowedExts))
            return FALSE;
    }

    $size = $file['size'] / 1024 / 1024;
    if (($options['max_size'] > 0) && ($size > $options['max_size']))
        return FALSE;

    $name = empty($options['name']) ? $file["name"] : $options['name'] . '.' . $ext;
    $file_path = $options['upload_path'] . $name;

    if ($options['overwrite'] && file_exists($file_path)) {
        unlink($file_path);
    }

    move_uploaded_file($file["tmp_name"], $file_path);
    return $name;
}

function escape($string)
{
    $string = strip_tags($string);
    $string = mysqli_real_escape_string(DB::getInstance(), $string);

    return $string;
}

function helper_login($email, $password)
{
    $email = escape($email);
    $password = escape($password);

    $password = md5($password);
    
    $conn = DB::getInstance();
    $sql = "SELECT * FROM users WHERE email=? and `password`=?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();
    // if length of result is 1
    if ($res->num_rows == 1) {
        $res = $res->fetch_assoc();
        if (!isBanned($res["banned"])) {
            $_SESSION["auth"] = true;
            $_SESSION["user"] = $res;
            header("location: /home");
            exit();
        } else {
            header("location: /pages/banned");
            exit();
        }
    } else {
        echo '<script>alert("Something went wrong")</script>';
    }
}

function isBanned($date)
{
    return isset($date) && $date > date("Y-m-d");
}

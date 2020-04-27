<?php 
require_once('../model/students.php');
/**
 * We check if there was a POST request and we validate the form and save the user
 */
$student = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * Validation
     */
    $errors = [];
    $student = [];
    if(empty($_POST['firstname'])) {
        $errors['firstname'] = 'Firstname is required';
    }
    if(empty($_POST['lastname'])) {
        $errors['lastname'] = 'Lastname is required';
    }
    $student['firstname'] = $_POST['firstname'];
    $student['lastname'] = $_POST['lastname'];
    $student['birthday'] = $_POST['birthday'];
    $student['bio'] = $_POST['bio'];
    $student['filename'] = '';
    $student['filepath'] = false;
    if(array_key_exists('image', $_FILES)) {
        if($_FILES['image']['error'] != UPLOAD_ERR_OK || !file_exists($_FILES['image']['tmp_name'])) {
            $errors['image'] = 'Error uploading file';
        }
        else {
            $student['filename'] = $_FILES['image']['name'];
            $student['filepath'] = $_FILES['image']['tmp_name'];
        }
    }
    /**
     * Save
     */
    if(empty($errors)) {
        saveStudentInDB($_POST['firstname'], $_POST['lastname'], $_POST['birthday'], $_POST['bio'], $student['filename']);
        if($student['filepath']) {
            move_uploaded_file($student['filepath'], realpath(dirname(__FILE__)) . '/../uploads/' . $student['filename']);
        }
        header("Location: /");
    }
}

include('../views/student/new.php');
?>
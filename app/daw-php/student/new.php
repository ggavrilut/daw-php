<?php 
require_once('../config/config.php');
require_once(DOCUMENT_ROOT . '/model/students.php');
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
    $student['birthday'] = empty($_POST['birthday']) ? null : $_POST['birthday'];
    $student['bio'] = $_POST['bio'];
    $student['filename'] = '';
    $student['filepath'] = '';
    if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) { // === if(array_key_exists('image', $_FILES)) {}
        if($_FILES['image']['error'] != UPLOAD_ERR_OK || file_exists($_FILES['image']['tmp_name'])) {
            $errors['image'] = 'Your file could not be uploaded. Please try again';
        }
        else {
            $student['filename'] = time() . '_' . $_FILES['image']['name'];
            $student['filepath'] = DOCUMENT_ROOT . '/uploads/' . $student['filename'];
        }
    }
    /**
     * Save
     */
    if(empty($errors)) {
        if(!empty($student['filepath'])) {
            move_uploaded_file($_FILES['image']['tmp_name'], $student['filepath']);
        }

        saveStudentInDB($student['firstname'], $student['lastname'], $student['birthday'], $student['bio'], $student['filename']);
        $_SESSION['student_create'] = 'success';
        header("Location: /");
    }
}

include(DOCUMENT_ROOT . '/views/student/new.php');
?>
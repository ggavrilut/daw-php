<?php 
require_once('../model/students.php');
/**
 * We check if there was a POST request and we validate the form and save the user
 */
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
    /**
     * Save
     */
    if(empty($errors)) {
        saveStudentInDB($_POST['firstname'], $_POST['lastname'], $_POST['birthday'], $_POST['bio'], $_POST['image']);
        header("Location: /");
    }
}

include('../views/student/new.php');
?>
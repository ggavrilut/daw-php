<?php 
require_once('config/config.php');

header('HTTP/1.0 404 Not Found');
$studentSavedSuccessfully = false;
if(isset($_SESSION['student_create']) && $_SESSION['student_create'] == 'success') {
    $studentSavedSuccessfully = true;
    unset($_SESSION['student_create']);
}
include (DOCUMENT_ROOT . '/views/index.php');
?>


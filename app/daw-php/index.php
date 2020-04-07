<?php 
error_reporting(E_ALL);

require_once('model/students.php');

$students = getStudentsFromDB();

include ('views/index.php')
?>


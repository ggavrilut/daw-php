<?php 

error_reporting(E_ALL);

// var_dump($_SERVER['REQUEST_METHOD']);
// echo '<pre>';
// print_r($_POST['firstname']);
// echo '------<br/>';
// print_r($_GET['test']);
// echo '</pre>';

$a = 5;
$b = 6;
$c = 'test';

$positions = [];
$positions['1'] = 'Student';
$positions['2'] = 'Teacher';


$availableGenders = [
    [
        'value' => 'mr',
        'name' => 'Mr'
    ],
    [
        'value' => 'mrs',
        'name' => 'Mrs'
    ],
    [
        'value' => 'ms',
        'name' => 'Ms'
    ]
];

$buttonText = 'Submit';
include ('views/index.php')
?>


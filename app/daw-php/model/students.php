<?php 

function createConnection() {
    $myConnection = mysqli_connect('mysql.daw-php.local', 'daw-php', 'daw-php', 'daw-php');

    if($myConnection == false || $myConnection->connect_errno) {
        echo 'Database error ' . $myConnection->connect_error;
        return false;
    }
    return $myConnection;
}

function getStudentsFromDB() {

    $students = [];
    $myConnection = mysqli_connect('mysql.daw-php.local', 'daw-php', 'daw-php', 'daw-php');

    if($myConnection == false || $myConnection->connect_errno) {
        echo 'Database error ' . $myConnection->connect_error;
        return $students;
    }
    $result = $myConnection->query("SELECT * FROM student;");    
    if($result === FALSE) {
        echo 'Database error ' . $myConnection->connect_error;
        return $students;
    }
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
    return $students;
}

function saveStudentInDB($firstname, $lastname, $birthday, $bio, $image) {
    if($myConnection = createConnection()) {
        $result = $myConnection->query("INSERT INTO student (firstname, lastname, birthday, bio, picture) VALUES ('$firstname', '$lastname', '$birthday', '$bio', '$image')");
        // print_r("INSERT INTO student (firstname, lastname, birthday, bio, picture) VALUES ('$firstname', '$lastname', '$birthday', '$bio', '$image')");
        // print_r($myConnection->error);
    }
}

?>
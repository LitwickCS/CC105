<?php
function getConnection() {
    $serverName = "127.0.0.1";
    $user = "root";
    $password = "russel";
    $database = "dbusers";
    
    $connection = mysqli_connect($serverName, $user, $password, $database);
    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $connection;
}

function insertStudentInfo($studentNumber, $firstName, $lastName, $courses, $email, $password) {
    $connection = getConnection();
    
    $statement = "INSERT INTO tblStudents (StudentNumber, FirstName, LastName, Course, Email, Password) 
    VALUES ('$studentNumber', '$firstName', '$lastName', '$courses', '$email', '$password')";

    
    if (mysqli_query($connection, $statement)) {
        mysqli_close($connection);
        return "Successfully saved.";
    } else {
        return "Error: " . mysqli_error($connection);
    }
}

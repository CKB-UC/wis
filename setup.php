<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentRecord";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
    echo "Connected successfully";

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    
    
    if ($result) {
    while ($row = $result->fetch_assoc()) {
    echo "StudentID: " . $row["StudentID"]. "<br>"
    . "FirstName: " . $row["FirstName"]. "<br>"
    . "LastName: " . $row["LastName"]. "<br>"
    . "DateOfBirth: " . $row["DateOfBirth"]. "<br>"
    . "Email: " . $row["Email"]. "<br>"
    . "PhoneNo: " . $row["PhoneNo"]. "<br>"
    ."<br>";
    
    }
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $sql1 = "SELECT * FROM Course";
    $result1 = $conn->query($sql1);
    
    
    if ($result1) {
    while ($row = $result1->fetch_assoc()) {
    echo "CourseID: " . $row["CourseID"]. "<br>"
    . "CourseName: " . $row["CourseName"]. "<br>"
    . "Credits: " . $row["Credits"]. "<br>"
    . "<br>";
    }
    } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    
    $sql2 = "SELECT * FROM Instructor";
    $result2 = $conn->query($sql2);
    
    
    if ($result2) {
    while ($row = $result2->fetch_assoc()) {
    echo "InstructorID: " . $row["InstructorID"]. "<br>"
    . "FirstName: " . $row["FirstName"]. "<br>"
    . "LastName: " . $row["LastName"]. "<br>"
    . "Email: " . $row["Email"]. "<br>"
    . "PhoneNo: " . $row["PhoneNo"]. "<br>"
    . "<br>";
    }
    } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
    
    $sql3 = "SELECT * FROM enrollment";
    $result3 = $conn->query($sql3);
    
    
    if ($result3) {
    while ($row = $result3->fetch_assoc()) {
    echo "EnrollmentID: " . $row["EnrollmentID"]. "<br>"
    . "StudentID: " . $row["StudentID"]. "<br>"
    . "CourseID: " . $row["CourseID"]. "<br>"
    . "Enrollmentdate: " . $row["Enrollmentdate"]. "<br>"
    . "Grade: " . $row["Grade"]. "<br>"
    . "<br>";
    }
    } else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
    }
?>
</body>
</html>

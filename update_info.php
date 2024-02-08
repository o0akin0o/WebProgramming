<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupId=$_POST['groupid'];
    $id =$_POST['sid'];
    include 'dbshell.php';
    // Construct the SQL query to update the record
    $sql = "UPDATE studentsinfo SET first_name='$fname', last_name='$lname', city='$city', groupId='$groupId' WHERE id=$id";
   
    if (mysqli_query($conn, $sql)) {
        
        header("Location: read.php");
        exit();
    } else {
      
        echo "Error updating record: " . $conn->error;
    }


// Close the database connection
$conn->close();
?>
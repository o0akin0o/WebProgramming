<?php
if (isset($_GET['sid'])) {
    $id = intval($_GET['sid']); 
    include 'dbshell.php';
    $delete = "DELETE FROM studentsinfo WHERE id=$id";
    if (mysqli_query($conn, $delete)) {
        header("Location: read.php");
        exit(); 
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Delete unsuccessfully";
}
?>
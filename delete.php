<?php
if (isset($_GET['deleteid'])) {
    $studentId = $_GET['deleteid'];

    // Perform your deletion logic here, for example, using SQL DELETE query
    require_once 'login.php';
    $sql = "DELETE FROM `students` WHERE `id` = $studentId";
    
    if (mysqli_query($con, $sql)) {
        // Deletion successful
        header("Location: student.php");
        exit();
    } else {
        // Deletion failed
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "ID parameter is missing. Invalid request.";
}

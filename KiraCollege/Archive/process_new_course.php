<?php
    $course_code = $_POST['course_code'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $instructors = $_POST['instructors'];
    $weeks = $_POST['weeks'];
    $description = $_POST['description'];

    //connect
    $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));

    //The Query
    $q = "insert into course values(null, '$course_code', '$name', '$subject', '$instructors', '$weeks', '$description')";

    //Execute the Query
    mysqli_query($db, $q) or die(mysqli_error($db));

    //Back to Home
    header("Location:courses.php");
    exit(0);
?>

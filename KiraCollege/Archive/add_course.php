<!DOCTYPE html>
<html>
<head>
    <title>Kira College</title>
    <meta charset=utf-8>
    <link rel=stylesheet href=stylesheet.css>
</head>
<body>
    <h1>Welcome to the Kira College Webpage</h1>
    <nav>
        <a href=index.php>Home</a>
        <a href=courses.php>Back</a>
    </nav>
    <h2>Add New Course</h2>
    <form method=post action=process_new_course.php>
        Course Code: <input type=text name=course_code><br>
        Name: <input type=text name=name><br>
        Subject: <input type=text name=subject><br>
        Instructors: <input type=text name=instructors><br>
        Weeks: <input type=integer name=weeks><br>
        Description: <br>
        <textarea rows=10 cols=50 name=description></textarea><br>
        <input type=submit value="Add New Course">
    </form>
<?php include 'footer.inc';?>

<?php include 'header.inc';?>
    <nav>
      <a href=courses.php>Back</a> &nbsp | &nbsp
      <a href=index.php>Home</a> &nbsp
      <a href=courses.php>Courses</a> &nbsp
      <a href=subjects.php>Subjects</a> &nbsp
      <a href=instructors.php>Instructors</a>
    </nav>
    <hr />
    <main class=padded>
      <?php
          $course_id = $_GET['course_id'];

          //Connect
          $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));

          //Search
          $q = "select * from course where course_id = '$course_id'";

          $results = mysqli_query($db, $q) or die(mysqli_error($db));

          //Display
          while($row=mysqli_fetch_array($results))
          {
              print "<h2 class=title2>Details About the {$row['name']} Course</h2>";
              print "<p><b>Course Code: </b>{$row['course_code']}</p>";
              print "<p><b>Subject: </b>{$row['subject']}</p>";
              print "<p><b>Instructor: </b>{$row['instructor']}</p>";
              print "<p><b>Duration (weeks): </b>{$row['weeks']}</p>";
              print "<br />";
              print "<p><b>Description: </b><p>{$row['description']}</p>";
              print "<br />";
              print "<p><b>Course Guide: </b><a href='Course_Guide/{$row['uploads']}' target='_blank'>{$row['uploads']}</a>";
          }
      ?>
    </main>
<?php include 'footer.inc';?>

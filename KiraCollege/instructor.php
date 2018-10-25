<?php include 'header.inc';?>
    <nav>
      <a href=instructors.php>Back</a> &nbsp | &nbsp
      <a href=index.php>Home</a> &nbsp
      <a href=courses.php>Courses</a> &nbsp
      <a href=subjects.php>Subjects</a> &nbsp
      <a href=instructors.php>Instructors</a>
    </nav>
    <hr />
    <main class=padded>
      <?php
          $instructor = $_GET['instructor'];

          //Connect
          $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));

          //Search
          $q = "select * from course where instructor = '$instructor'";

          $results = mysqli_query($db, $q) or die(mysqli_error($db));

          //Display
          while($row=mysqli_fetch_array($results))
          {
              print "<h2 class=title2>Courses taught by {$row['instructor']}</h2>";
              print "<p><b>Course Code: </b>{$row['course_code']}</p>";
              print "<p><b>Course Name: </b>{$row['name']}</p>";
              print "<p><b>Subject: </b>{$row['subject']}</p>";
              print "<p><b>Duration (weeks): </b>{$row['weeks']}</p>";
              print "<br />";
              print "<p><b>Description: </b><p>{$row['description']}</p>";
          }
      ?>
    </main>
<?php include 'footer.inc';?>

<?php include 'header.inc';?>
  <?php include 'nav.inc';?>
    <!-- OLD NAV
      <nav>
        <a href=courses.php>Back</a> &nbsp | &nbsp
        <a href=index.php>Home</a> &nbsp
        <a href=courses.php>Courses</a> &nbsp
        <a href=subjects.php>Subjects</a> &nbsp
        <a href=instructors.php>Instructors</a>
      </nav>
    -->
    <main class=padded>
      <h2>Add New Course</h2>
      <form method=post action=add.php enctype="multipart/form-data">
        <div id=form-text>
          Course Code: <input type=text name=course_code><br>
          Name: <input type=text name=name><br>
          Subject: <input type=text name=subject><br>
          Instructor: <input type=text name=instructor><br>
          Weeks: <input type=integer name=weeks><br>
          <br />
          Description: <br>
          <textarea rows=8 cols=80 name=description></textarea><br>
          <br />
          <input type="file" name = "uploads" /> <br>
          <br />
          <input type=submit value="Add New Course" name="submit">
        </div>
      </form>
    </main>
<?php include 'footer.inc';?>

<!-- Processing Script -->
  <?php
    function add()
    {
      //Declaring Variables
      $course_code = $_POST['course_code'];
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $instructor = $_POST['instructor'];
      $weeks = $_POST['weeks'];
      $description = $_POST['description'];
      $tmp = $_FILES['uploads']['tmp_name'];
      $dest = "Course_Guide/{$_FILES['uploads']['name']}";

      //Move Files from Temp Directory to Dest Directory
      move_uploaded_file($tmp, $dest);

      //Connect to the Server
      $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));

      //Insert values in the Query
      $q = "INSERT INTO course VALUES(null, '$course_code', '$name', '$subject', '$instructor', $weeks, '$description', '{$_FILES['uploads']['name']}')";
      //$q = "INSERT INTO course VALUES(null, '$course_code', '$name', '$subject', '$instructor', $weeks, '$description')"; //BACKUP

      //Execute the Query
      mysqli_query($db, $q) or die(mysqli_error($db));

      //Redirect Back to the Courses Page
      header("Location:courses.php");
      exit(0);
    }

    if(isset($_POST['submit']))
    {
      add();
    }
  ?>
<!-- End Processing Script -->

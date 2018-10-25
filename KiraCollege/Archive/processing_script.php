<!-- Processing Script -->
    <?php
          //Declaring Variables
          $course_code = $_POST['course_code'];
          $name = $_POST['name'];
          $subject = $_POST['subject'];
          $instructors = $_POST['instructors'];
          $weeks = $_POST['weeks'];
          $description = $_POST['description'];
          $tmp = $_FILES['file']['tmp_name'];
          $dest = "Course_Guide/{$_FILES['file']['name']}";

          //Move Files from Temp Directory to Dest Directory
          move_uploaded_file($tmp, $dest);

          //Connect to the Server
          $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));

          //Insert values in the Query
          $q = "INSERT INTO course VALUES(NULL, '$course_code', '$name', '$subject', '$instructors', '$weeks', '$description')";

          //Execute the Query
          mysqli_query($db, $q) or die(mysqli_error($db));

          //Redirect Back to the Courses Page
          header("Location:courses.php");
          exit(0);
    ?>
<!-- End Processing Script -->

<?php include 'header.inc';?>
    <?php include 'nav.inc';?>
    <main>
      <h2 class=title1>Subjects</h2>
      <table width=100%>
          <tr>
              <!-- BACKUP
                <th>Course ID</th>
                <th>Course Code</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Instructor</th>
                <th>Weeks</th>
                <th>Description</th>
              -->
              <th width="(100/x)%">Course Code</th>
              <th width="(100/x)%">Name</th>
              <th width="(100/x)%">Subject</th>
              <th width="(100/x)%">Instructor</th>
              <th width="(100/x)%">Weeks</th>
              <!-- TOO MUCH INFO
                <th width="(100/x)%">Description</th>
              -->
          </tr>
          <?php
              //Connect
              $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));

              $q = "select * from course";

              $results = mysqli_query($db, $q) or die(mysqli_error($db));

              while($row=mysqli_fetch_array($results))
              {
                  print "<tr>\n";
                  print "<td>{$row['course_code']}</td>\n";
                  print "<td>{$row['name']}</td>\n";
                  print "<td><a href='subject.php?subject={$row['subject']}'>{$row['subject']}</a></td>\n";
                  print "<td>{$row['instructor']}</td>\n";
                  print "<td>{$row['weeks']}</td>\n";
                  //print "<td>{$row['description']}</td>\n";
                  print "</tr>\n";
              }
          ?>
      </table>
    </main>
<?php include 'footer.inc';?>

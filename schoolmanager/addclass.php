<?php

 session_start();
    if(isset($_SESSION['musername']) && isset($_SESSION['mpassword']))
    {
        $user=$_SESSION['musername'];
        $pass=$_SESSION['mpassword'];
    }
    else
    {
      echo '<META http-equiv="refresh" content="0;logoutmanager">';
    }
     
    ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>School Manager</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index">School <span class="logo_colour">Manager</span></a></h1>
          <h2>School Maintenance System</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="feerecept">FEE RECEPT</a></li>
          <li><a href="addstudent">ADD STUDENT</a></li>
          <li><a href="viewstudent">VIEW STUDENT</a></li>
          <li><a href="viewstaff">STAFF</a></li>
          <li class="selected"><a href="addclass">ADD CLASS</a></li>
          <li><a href="logoutmanager">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Add Student</h1>
        <form action="addclassdb" method="post">
          <div class="form_settings">
              <p><span>Class Name</span><input class="contact" type="text" name="class" value="" required/></p>
              
              
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addclass" value="ADD" /></p>
          </div>
        </form>
        <h1>Class List</h1>
        <table>
            <tr><th>Slno</th><th>Name</th><th></th></tr>
                <?php
                $slno=0;
                $sql="select * from `class`";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            $slno=0;
            while($row=$result->fetch_assoc()) {
                    $slno++;
                    $name=$row['name'];
                    $id=$row['id'];
                    echo "<tr><td>$slno</td><td>$name</td><td><a href=delclass?id=$id>Delete</a></td></tr>";
                }
        }
        else{
            echo 'No Data Found';
        }
                ?>
            
        </table>
      </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Copyright &copy; School Manager </p>
    </div>
  </div>
</body>
</html>


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
          <li class="selected"><a href="addstudent">ADD STUDENT</a></li>
          <li><a href="viewstudent">VIEW STUDENT</a></li>
          <li><a href="viewstaff">STAFF</a></li>
          <li><a href="addclass">ADD CLASS</a></li>
          <li><a href="logoutmanager">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Add Student</h1>
        <form action="addstudentdb" method="post">
          <div class="form_settings">
              <p><span>Register Number</span><input class="contact" type="text" name="regno" value="" required/></p>
              <p><span>Student Name</span><input class="contact" type="text" name="name" value="" required/></p>
              <p><span>Address</span><input class="contact" type="text" name="address" value="" required/></p>
              <p><span>Religion</span><input class="contact" type="text" name="religion" value="" required/></p>
              <p><span>Gender</span><select name="gender" required><option>Male</option><option>Female</option><option>Others</option></select></p>
              <p><span>Phone No</span><input class="contact" type="number" name="phno" value="" required/></p>
              <p><span>Date of Birth</span><input class="contact" type="date" name="dob" value="" required/></p>
              <p><span>Nationality</span><input class="contact" type="text" name="nat" value="" required/></p>
              <p><span>Father Name</span><input class="contact" type="text" name="father" value="" required/></p>
              <p><span>Father Occupation</span><input class="contact" type="text" name="focc" value="" required/></p>
              <p><span>Father Qualification</span><input class="contact" type="text" name="fque" value="" required/></p>
              <p><span>Mother Name</span><input class="contact" type="text" name="mother" value="" required/></p>
              <p><span>Mother Occupation</span><input class="contact" type="text" name="mocc" value="" required/></p>
              <p><span>Mother Qualification</span><input class="contact" type="text" name="mque" value="" required/></p>
              <p><span>Annual Income</span><input class="contact" type="number" name="income" value="" required/></p>
              <p><span>Class</span><select name="class" required><?php
                
                $sql="select * from `class`";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            while($row=$result->fetch_assoc()) {
                    
                    $name=$row['name'];
                    
                    echo "<option>$name</option>";
                }
        }
        else{
            echo 'No Data Found';
        }
        ?></select></p>
              <p><span>Fees</span><input class="contact" type="number" name="fee" value="" required/></p>
              
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addstd" value="ADD" /></p>
          </div>
        </form>
      </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Copyright &copy; School Manager </p>
    </div>
  </div>
</body>
</html>


<?php

 session_start();
    if(isset($_SESSION['susername']) && isset($_SESSION['spassword']))
    {
        $user=$_SESSION['susername'];
        $pass=$_SESSION['spassword'];
    }
    else
    {
      echo '<META http-equiv="refresh" content="0;logoutstaff">';
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
          <li class="selected"><a href="addmarks">Add Marks</a></li>
          <li><a href="genmarks">Generate Marks Card</a></li>
          <li><a href="gentimetablr">Generate Timetable</a></li>
          <li><a href="viewtimetable">View Timetable</a></li>
          <li><a href="logoutstaff">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Add Marks</h1>
        <form action="addmarksdb" method="post">
          <div class="form_settings">
              <p><span>Register Number</span><input class="contact" type="text" name="regno" value="" required/></p>
              <p><span>Test Number</span><input class="contact" type="text" name="test" value="" required/></p>
              <p><span>Subject 1</span><input class="contact" type="number" name="sub1" value="" required/></p>
              <p><span>Subject 2</span><input class="contact" type="number" name="sub2" value="" required/></p>
              <p><span>Subject 3</span><input class="contact" type="number" name="sub3" value="" required/></p>
              <p><span>Subject 4</span><input class="contact" type="number" name="sub4" value="" required/></p>
              <p><span>Subject 5</span><input class="contact" type="number" name="sub5" value="" required/></p>
              <p><span>Subject 6</span><input class="contact" type="number" name="sub6" value="" required/></p>
              <p><span>Activity 1</span><input class="contact" type="number" name="ext1" value="" required/></p>
              <p><span>Activity 2</span><input class="contact" type="number" name="ext2" value="" required/></p>
              
              
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addmarks" value="ADD" /></p>
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


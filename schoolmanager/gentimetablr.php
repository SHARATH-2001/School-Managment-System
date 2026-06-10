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
          <li><a href="addmarks">Add Marks</a></li>
          <li><a href="genmarks">Generate Marks Card</a></li>
          <li class="selected"><a href="gentimetablr">Generate Timetable</a></li>
          <li><a href="viewtimetable">View Timetable</a></li>
          <li><a href="logoutstaff">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Generate Timetable</h1>
        <form action="addtimetabledb" method="post">
          <div class="form_settings">
              <p><span>Day</span><select name="day" required><option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option><option>Friday</option><option>Saturday</option></select></p>
              <p><span>Time</span><select name="time" required><option>10AM-11AM</option><option>11AM-12PM</option><option>12PM-1PM</option><option>2PM-3PM</option><option>3PM-4PM</option></select></p>
               <p><span>Subject</span><input class="contact" type="text" name="subject" value="" required/></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addtimetable" value="ADD" /></p>
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


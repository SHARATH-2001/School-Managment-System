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
     $sql="select * from `staff` where id='$user'";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            while($row=$result->fetch_assoc()) {
                    
                    $class=$row['class'];
                     }
        }
        function gettime($day,$time,$class) {
            $subject="";
            $sql="select * from `timetable` where class='$class' and day='$day' and time='$time'";
           include 'dbconfig.php';
           $result=$conn->query($sql);
           if($result ->num_rows>0){
               while($row=$result->fetch_assoc())
               {
                   echo $row['subject'];
               }
           }
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
          <li><a href="gentimetablr">Generate Timetable</a></li>
          <li class="selected"><a href="viewtimetable">View Timetable</a></li>
          <li><a href="logoutstaff">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Time Table</h1>
        <table>
            <tr><th>Days</th><th>10AM-11AM</th><th>11AM-12PM</th><th>12PM-1PM</th><th>1PM-2PM</th><th>2PM-3PM</th><th>3PM-4PM</th></tr>
            <tr><td>Monday</td><td><?php gettime("Monday", "10AM-11AM",$class)?></td><td><?php gettime("Monday", "11AM-12PM",$class)?></td><td><?php gettime("Monday", "12PM-1PM",$class)?></td><td rowspan="6" align="center"><h1>L<br>U<br>N<br>C<br>H</h1></td><td><?php gettime("Monday", "2PM-3PM",$class)?></td><td><?php gettime("Monday", "3PM-4PM",$class)?></td></tr>
            <tr><td>Tuesday</td><td><?php gettime("Tuesday", "10AM-11AM",$class)?></td><td><?php gettime("Tuesday", "11AM-12PM",$class)?></td><td><?php gettime("Tuesday", "12PM-1PM",$class)?></td><td><?php gettime("Tuesday", "2PM-3PM",$class)?></td><td><?php gettime("Tuesday", "3PM-4PM",$class)?></td></tr>
            <tr><td>Wednesday</td><td><?php gettime("Wednesday", "10AM-11AM",$class)?></td><td><?php gettime("Wednesday", "11AM-12PM",$class)?></td><td><?php gettime("Wednesday", "12PM-1PM",$class)?></td><td><?php gettime("Wednesday", "2PM-3PM",$class)?></td><td><?php gettime("Wednesday", "3PM-4PM",$class)?></td></tr>
            <tr><td>Thursday</td><td><?php gettime("Thursday", "10AM-11AM",$class)?></td><td><?php gettime("Thursday", "11AM-12PM",$class)?></td><td><?php gettime("Thursday", "12PM-1PM",$class)?></td><td><?php gettime("Thursday", "2PM-3PM",$class)?></td><td><?php gettime("Thursday", "3PM-4PM",$class)?></td></tr>
            <tr><td>Friday</td><td><?php gettime("Friday", "10AM-11AM",$class)?></td><td><?php gettime("Friday", "11AM-12PM",$class)?></td><td><?php gettime("Friday", "12PM-1PM",$class)?></td><td><?php gettime("Friday", "2PM-3PM",$class)?></td><td><?php gettime("Friday", "3PM-4PM",$class)?></td></tr>
            <tr><td>Saturday</td><td><?php gettime("Saturday", "10AM-11AM",$class)?></td><td><?php gettime("Saturday", "11AM-12PM",$class)?></td><td><?php gettime("Saturday", "12PM-1PM",$class)?></td><td><?php gettime("Saturday", "2PM-3PM",$class)?></td><td><?php gettime("Saturday", "3PM-4PM",$class)?></td></tr>
        </table>
      </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Copyright &copy; School Manager </p>
    </div>
  </div>
</body>
</html>


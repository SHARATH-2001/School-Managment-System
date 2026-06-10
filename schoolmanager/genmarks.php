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
          <li class="selected"><a href="genmarks">Generate Marks Card</a></li>
          <li><a href="gentimetablr">Generate Timetable</a></li>
          <li><a href="viewtimetable">View Timetable</a></li>
          <li><a href="logoutstaff">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Generate Marks Card</h1>
        <form action="" method="post">
          <div class="form_settings">
              <p><span>Register Number</span><input class="contact" type="text" name="regno" value="" required/></p>
              <p><span>Test Number</span><input class="contact" type="text" name="test" value="" required/></p>
              
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="search" value="Search" /></p>
          </div>
        </form>
        <h1>Marks List</h1>
        
                <?php
                if(isset($_POST['search'])){
                    $regno=$_POST['regno'];
                    $test=$_POST['test'];
                $sql="select * from `marks` where regno='$regno' and testno='$test'";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            while($row=$result->fetch_assoc()) {
                    $regno=$row['regno'];
                    $testno=$row['testno'];
                    $sub1=$row['sub1'];
                    $sub2=$row['sub2'];
                    $sub3=$row['sub3'];
                    $sub4=$row['sub4'];
                    $sub5=$row['sub5'];
                    $sub6=$row['sub6'];
                    $ext1=$row['ext1'];
                    $ext2=$row['ext2'];
                    $total=$sub1+$sub2+$sub3+$sub4+$sub5+$sub6+$ext1+$ext2;
                   echo "<table><tr><td>RegNo: </td><td>$regno</td></tr>";
                   echo "<tr><td>Test No: </td><td>$testno</td></tr>";
                   echo "<tr><td>Subject 1: </td><td>$sub1</td></tr>";
                   echo "<tr><td>Subject 2: </td><td>$sub2</td></tr>";
                   echo "<tr><td>Subject 3: </td><td>$sub3</td></tr>";
                   echo "<tr><td>Subject 4: </td><td>$sub4</td></tr>";
                   echo "<tr><td>Subject 5: </td><td>$sub5</td></tr>";
                   echo "<tr><td>Subject 6: </td><td>$sub6</td></tr>";
                   echo "<tr><td>Activity 1: </td><td>$ext1</td></tr>";
                   echo "<tr><td>Activity 2: </td><td>$ext2</td></tr>";
                   echo "<tr><td>Total: </td><td>$total</td></tr>";
                   echo "</table>";
                }
        }
        else{
            echo 'No Data Found';
        }
                }
                ?>
            
       
      </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Copyright &copy; School Manager </p>
    </div>
  </div>
</body>
</html>


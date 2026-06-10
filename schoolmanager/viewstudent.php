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
          <li class="selected"><a href="viewstudent">VIEW STUDENT</a></li>
          <li><a href="viewstaff">STAFF</a></li>
          <li><a href="addclass">ADD CLASS</a></li>
          <li><a href="logoutmanager">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Student List</h1>
        <table>
            <tr><th>Slno</th><th>Reg No</th><th>Name</th><th>Class</th><th>Address</th><th>Religion</th><th>Gender</th><th>Nationality</th><th>Father</th><th>Mother</th><th>Annual Income</th><th>Class</th><th>Fee</th><th>Date Of Admission</th><th></th></tr>
                <?php
                $slno=0;
                $sql="select * from `student`";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            $slno=0;
            while($row=$result->fetch_assoc()) {
                    $slno++;
                    $regno=$row['regno'];
                    $name=$row['name'];
                    $address=$row['address'];
            $religion=$row['relegian'];
            $gender=$row['gender'];
            $phno=$row['phno'];
            $dob=$row['dob'];
            $nat=$row['natinality'];
            $fname=$row['father'];
            $focc=$row['focc'];
            $fque=$row['fqualification'];
            $mname=$row['mother'];
            $mocc=$row['mocc'];
            $mque=$row['mqualification'];
            $income=$row['annualincome'];
            $class=$row['class'];
            $fee=$row['fee'];
            $dateofadmission=$row['dateofadmission'];
                    echo "<tr><td>$slno</td><td>$regno</td><td>$name</td><td>$class</td><td>$address</td><td>$religion</td><td>$gender</td><td>$nat</td><td>$fname<br>$fque<br>$focc</td><td>$mname<br>$mque<br>$mocc</td><td>$income</td><td>$class</td><td>$fee</td><td>$dateofadmission</td><td><a href=delstudent?id=$regno>Delete</a><a href=editstudent?id=$regno>Edit</a></td></tr>";
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


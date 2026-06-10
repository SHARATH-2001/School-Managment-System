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
          <li class="selected"><a href="feerecept">FEE RECEPT</a></li>
          <li><a href="addstudent">ADD STUDENT</a></li>
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
        <h1>Fee Manager</h1>
        <form action="" method="post">
          <div class="form_settings">
              <p><span>Register Number</span><input class="contact" type="text" name="regno" value="" required/></p>
              
              
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="search" value="search" /></p>
          </div>
        </form>
        <h1></h1>
       
                <?php
                
                if(isset($_POST['search']))
                {
                $regno=$_POST['regno'];
                $sql="select * from `student` where regno='$regno'";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            echo "<h1>Student Detalis</h1>";
            while($row=$result->fetch_assoc()) {
                    $name=$row['name'];
                    $fee=$row['fee'];
                    $class=$row['class'];
                    echo "<b>Name: </b>$name<br><b>Class: </b>$class<br><b>Fee: </b>$fee<br>";
                    $sql1="select * from `fees` where regno='$regno' and class='$class'";
                    $result1=$conn->query($sql1);
                    $col=0;
                    if($result1 ->num_rows>0){
                        
                        while($row1=$result1->fetch_assoc()) {
                            $col=$col+$row1['amount'];
                        }
                        $balance=$fee-$col;
                    }
                        echo "<b>Balance: </b>$balance";
                    
                    echo "<form action=\"\" method=\"post\">";
           echo "<div class=\"form_settings\">";
           echo "<p><span>Reg No</span><input class=\"contact\" type=\"text\" name=\"regno\" value=\"$regno\" required/></p>";
           echo "<p><span>class</span><input class=\"contact\" type=\"text\" name=\"class\" value=\"$class\" required/></p>";
              echo "<p><span>Fee Amount</span><input class=\"contact\" type=\"number\" name=\"fee\" value=\"\" required/></p>";
              echo "<p style=\"padding-top: 15px\"><span>&nbsp;</span><input class=\"submit\" type=\"submit\" name=\"addfee\" value=\"Collect\" /></p>";
          echo "</div>";
        echo "</form>";
        
                }
        }
        else{
            echo 'Invalid Reg No';
        }
                }
                if(isset($_POST['addfee']))
                {
                     $fee1=$_POST['fee'];
                     $class=$_POST['class'];
                     $regno=$_POST['regno'];
            include 'dbconfig.php';
            $sql="INSERT INTO `fees` (`id`, `regno`, `amount`, `dateofpayment`, `class`) VALUES (NULL, '$regno', '$fee1', CURRENT_TIMESTAMP, '$class')";
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Fee Added Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;feerecept1">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;feerecept1">';
            }
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


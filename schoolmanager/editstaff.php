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
     <?php
                
                $code=$_GET['id'];
               $sql="select * from `staff` where id='$code'";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            $slno=0;
            while($row=$result->fetch_assoc()) {
                    $slno++;
                    $name=$row['name'];
                    $id=$row['id'];
                    $address=$row['address'];
                    $phno=$row['phno'];
                    $qualification=$row['qualification'];
                    $class=$row['class'];
                    $password=$row['password'];
                    }
        }
                ?>
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
          <li class="selected"><a href="viewstaff">STAFF</a></li>
          <li><a href="addclass">ADD CLASS</a></li>
          <li><a href="logoutmanager">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <h1>Welcome to the School Management System</h1>
        <h1>Update Staff</h1>
        <form action="updatestaffdb?oid=<?php echo $id;?>" method="post">
          <div class="form_settings">
              <p><span>Email ID</span><input class="contact" type="email" name="email" value="<?php echo $id;?>" required/></p>
              <p><span>Name</span><input class="contact" type="text" name="name" value="<?php echo $name;?>" required/></p>
              <p><span>Qualification</span><input class="contact" type="text" name="qualification" value="<?php echo $qualification;?>" required/></p>
              <p><span>Address</span><input class="contact" type="text" name="address" value="<?php echo $address;?>" required/></p>
              <p><span>Phone No</span><input class="contact" type="text" name="phno" value="<?php echo $phno;?>" required/></p>
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
              <p><span>Password</span><input class="contact" type="password" name="password" value="<?php echo $password;?>" required/></p>
              <p><span>Re-Enter Password</span><input class="contact" type="password" name="repass" value="<?php echo $password;?>" required/></p>
              
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="updatestaff" value="update" /></p>
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


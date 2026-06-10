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
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Do You Really want to delete <?php $code=$_GET['id']; echo $code;?>?<br>
        <form method="POST">
            <input type="submit" value="Yes" name="yes">
            <input type="submit" value="Back" name="no">
        </form>
        <?php
       if(isset($_POST['yes'])){
            include 'dbconfig.php';
	   $sql="DELETE FROM `staff` WHERE `id` = '$code'";
           if(mysqli_query($conn, $sql))
           {
                echo '<script>alert("Data Deleted succesfull")</script>';
               echo '<META http-equiv="refresh" content="0;viewstaff">';
           }
           else{
                echo '<script>alert("DB Error")</script>';
               echo '<META http-equiv="refresh" content="0;viewstaff">';
           }
       }
       else if(isset ($_POST['no'])){
           echo '<META http-equiv="refresh" content="0;viewstaff">';
       }
        ?>
    </body>
</html>
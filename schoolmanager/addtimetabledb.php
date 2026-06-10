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
    ?>
<?php
        if(isset($_POST['addtimetable'])){
            $day=$_POST['day'];
            $time=$_POST['time'];
            $subject=$_POST['subject'];
             $sql="select * from `timetable` where class='$class' and day='$day' and time='$time'";
        include 'dbconfig.php';
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            echo '<script>alert("Class Already Exist for this Slot")</script>';
                  echo '<META http-equiv="refresh" content="0;gentimetablr">';
        }
          else{ 
            $sql="INSERT INTO `timetable` (`id`, `class`, `day`, `time`, `subject`) VALUES (NULL, '$class', '$day', '$time', '$subject')";
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Timetable Added Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;gentimetablr">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;gentimetablr">';
            }
          }
        }
        else{
            echo '<META http-equiv="refresh" content="0;gentimetablr">';
        }
?>
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
            $slno=0;
            while($row=$result->fetch_assoc()) {
                    
                    $class=$row['class'];
                     }
        }
    ?>
<?php
        if(isset($_POST['addmarks'])){
            $regno=$_POST['regno'];
            $test=$_POST['test'];
            $sub1=$_POST['sub1'];
            $sub2=$_POST['sub2'];
            $sub3=$_POST['sub3'];
            $sub4=$_POST['sub4'];
            $sub5=$_POST['sub5'];
            $sub6=$_POST['sub6'];
            $ext1=$_POST['ext1'];
            $ext2=$_POST['ext2'];
            include 'dbconfig.php';
            $sql="INSERT INTO `marks` (`id`, `regno`, `calss`, `testno`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `ext1`, `ext2`) VALUES (NULL, '$regno', '$class', '$test', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$ext1', '$ext2')";
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Marks Added Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;addmarks">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;addmarks">';
            }
        }
        else{
            echo '<META http-equiv="refresh" content="0;addmarks">';
        }
?>
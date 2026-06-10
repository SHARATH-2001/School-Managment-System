<?php
        if(isset($_POST['addstaff'])){
            $id=$_POST['email'];
            $name=$_POST['name'];
            $qualification=$_POST['qualification'];
            $address=$_POST['address'];
            $phno=$_POST['phno'];
            $password=$_POST['password'];
            $repass=$_POST['repass'];
            $class=$_POST['class'];
            if($password==$repass)
            {
            include 'dbconfig.php';
            $sql="INSERT INTO `staff` (`id`, `name`, `qualification`, `address`, `phno`, `class`, `password`) VALUES ('$id', '$name', '$qualification', '$address', '$phno', '$class', '$password')";
           // echo $sql;
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Staff Added Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;viewstaff">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;viewstaff">';
            }
        }
        else{
            echo '<script>alert("Password Mismatch")</script>';
            echo '<META http-equiv="refresh" content="0;viewstaff">';
        }
        }
        else{
            echo '<META http-equiv="refresh" content="0;viewstaff">';
        }
?>
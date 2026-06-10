<?php
        if(isset($_POST['updatestaff'])){
            $oid=$_GET['oid'];
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
            $sql="update `staff` set `id`='$id', `name`='$name', `qualification`='$qualification', `address`='$address', `phno`='$phno', `class`='$class', `password`='$password' where id='$oid'";
           // echo $sql;
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Staff Updated Successfully")</script>';
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
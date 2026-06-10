<?php
        if(isset($_POST['addclass'])){
            $class=$_POST['class'];
            include 'dbconfig.php';
            $sql="INSERT INTO `class` (`id`, `name`) VALUES (NULL, '$class')";
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Class Added Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;addclass">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;addclass">';
            }
        }
        else{
            echo '<META http-equiv="refresh" content="0;addclass">';
        }
?>
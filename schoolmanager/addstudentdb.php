<?php
        if(isset($_POST['addstd'])){
            $regno=$_POST['regno'];
            $name=$_POST['name'];
            $address=$_POST['address'];
            $religion=$_POST['religion'];
            $gender=$_POST['gender'];
            $phno=$_POST['phno'];
            $dob=$_POST['dob'];
            $nat=$_POST['nat'];
            $fname=$_POST['father'];
            $focc=$_POST['focc'];
            $fque=$_POST['fque'];
            $mname=$_POST['mother'];
            $mocc=$_POST['mocc'];
            $mque=$_POST['mque'];
            $income=$_POST['income'];
            $class=$_POST['class'];
            $fee=$_POST['fee'];
            include 'dbconfig.php';
            $sql="INSERT INTO `student` (`regno`, `name`, `address`, `relegian`, `gender`, `phno`, `dob`, `natinality`, `father`, `focc`, `fqualification`, `mother`, `mocc`, `mqualification`, `annualincome`, `class`, `fee`) VALUES ('$regno', '$name', '$address', '$religion', '$gender', '$phno', '$dob', '$nat', '$fname', '$focc', '$fque', '$mname', '$mocc', '$mque', '$income', '$class', '$fee')";
            
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Student Added Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;addstudent">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;addstudent">';
            }
        }
        else{
            echo '<META http-equiv="refresh" content="0;addstudent">';
        }
?>
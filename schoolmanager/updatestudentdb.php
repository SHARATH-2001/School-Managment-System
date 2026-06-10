<?php
        if(isset($_POST['updatestd'])){
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
            $sql="update `student` set `name`='$name', `address`='$address', `relegian`='$religion', `gender`='$religion', `phno`='$phno', `dob`='$dob', `natinality`='$nat', `father`='$fname', `focc`='$focc', `fqualification`='$fque', `mother`='$mname', `mocc`='$mocc', `mqualification`='$mque', `annualincome`='$income', `class`='$class', `fee`='$fee' where regno='$regno'";
            
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Student Updated Successfully")</script>';
                  echo '<META http-equiv="refresh" content="0;viewstudent">';
            }
            else{
                echo '<script>alert("DB  Error")</script>';
                echo '<META http-equiv="refresh" content="0;viewstudent">';
            }
        }
        else{
            echo '<META http-equiv="refresh" content="0;viewstudent">';
        }
?>
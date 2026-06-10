<?php
 include 'dbconfig.php';
 $sql1="select * from `fees`";
                    $result1=$conn->query($sql1);
                    if($result1 ->num_rows>0){
                        
                        while($row1=$result1->fetch_assoc()) {
                            $regno=$row1['regno'];
                            $class=$row1['class'];
                            $date=$row1['dateofpayment'];
                            $feess=$row1['amount'];
                        }
                        
                    }
                        $sql="select * from `student` where regno='$regno'";
       
        $result=$conn->query($sql);
        if($result ->num_rows>0){
            //echo "<h1>Student Detalis</h1>";
            while($row=$result->fetch_assoc()) {
                    $name=$row['name'];
                    $fee=$row['fee'];
                    $class=$row['class'];
                    //echo "<b>Name: </b>$name<br><b>Class: </b>$class<br><b>Fee: </b>$fee<br>";
                    $sql1="select * from `fees` where regno='$regno' and class='$class'";
                    $result1=$conn->query($sql1);
                    $col=0;
                    if($result1 ->num_rows>0){
                        
                        while($row1=$result1->fetch_assoc()) {
                            $col=$col+$row1['amount'];
                        }
                        $balance=$fee-$col;
                    }
                        //echo "<b>Balance: </b>$balance";
            }
        }
?>
<a href="feerecept"><h1 align="center">School Management System</h1></a>
<table width="100%" align="center">
    <tr><td>Date: </td><td><?php echo $date;?></td><td>Name: </td><td><?php echo $name;?></td></tr>
    <tr><td>Amount Paid:</td><td><?php echo $feess;?></td><td>Class: </td><td><?php echo $class;?></td></tr>
    <tr><td>Balance: </td><td><?php echo $balance;?></td><td></td><td></td></tr>
    
</table>
<br>
<br>
Signature


 <?php
$uname=$_POST['name'];
$passwd=$_POST['password'];
$sql ="select * from manager where username='$uname' and password='$passwd'";
include 'dbconfig.php';
$result=$conn->query($sql);
session_start();
if($result ->num_rows>0){
	while($row=$result->fetch_assoc()) {
		$_SESSION['musername']=$uname;
		$_SESSION['mpassword']=$passwd;
		echo '<META http-equiv="refresh" content="0;feerecept">';
	}
}
else{
	echo '<script>alert("Invalid Username or Password")</script>';
	echo '<META http-equiv="refresh" content="0;logoutmanager">';
}

?>
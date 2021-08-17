<?php
include('../partials/connect.php');
$username = $_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if ($password==$password2) {
	$sql="INSERT INTO customers(email, password) VALUES('$email','$password')";
	$connect->query($sql);
	echo "<script> alert('You are registered');
			window.location.href='../customerregistration.php';
			</script>";
}else{
	echo "<script> alert('Password did not match');
			window.location.href='../customerregistration.php';
			</script>"; 
}

$vkey = md5(time().$username);



?>
<?php
include "config.php";
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$phnno=$_POST['phnno'];
$addr=$_POST['addr'];
$em=$_POST['em'];
$psd=$_POST['psd'];
$cpsd=$_POST['cpsd'];

$query="insert into rg values('$name','$fname','$gender','$dob',phnno,'$addr','$em','$psd','$cpsd')";
if(isset($_POST['submit']))
{
	if($res=mysqli_query($con,$query))
	{
		echo"<script>alert('Data Saved');
		window.location.href='reg.php';</script>";
	}
	else
	{
		echo"Data error";
	}
}
?>
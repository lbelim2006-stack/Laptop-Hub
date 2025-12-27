<?php
include("connect.php");

$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

if($usertype=="admin")
{
	$q="select * from admin_login where admin_email='$username' and admin_password='$password'";
	$res=mysqli_query($con,$q);
	
	if($row=mysqli_fetch_row($res))
	{
		//Applied session
		session_start();
		$_SESSION['username']=$username;
		header("location:admin_homee.php");
	}
	else
	{
		print "<script>alert('Invalid Username or Password');window.location.href='login.php';</script>";
	}
}
else if($usertype=="reguser")
{
	$q="select * from user_master_tbl where user_email='$username' and user_password='$password'";
	$res=mysqli_query($con,$q);

	
	if($row=mysqli_fetch_row($res))
	{
		session_start();
		$_SESSION['username1']=$username;
		$_SESSION['user_id']=$row[0];
		header("location:reg_home.php");
	}
	else
	{
		print "<script>alert('Invalid Username or Password');window.location.href='login.php';</script>";
	    
		
	}
}
else
{
		print "<script>alert('Invalid Username or Password');window.location.href='login.php';</script>";
	}
?>
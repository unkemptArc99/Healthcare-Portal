<?php
session_start();
$user=$_POST["usernamesup"];
$pass=$_POST["userpasssup"];
$name=$_POST["namesup"];
$date=$_POST["datepicker"];
$type=$_POST["profession"];
$contact=$_POST["contact"];

$dbname="FinalProject";
$servername="localhost";
$username="root";
$password="Mandabarca1!t";

$conn=mysqli_connect($servername,$username,$password,$dbname);
	
if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

$sql=$sql1="";
$prof="";

if($type=="option1")
{
	$sql="insert into Doctor values('$name','$user','$pass','$date','$contact','$date')";
	$sql1="select * from Doctor where Username='$user'";
	$prof='d';
}
elseif($type=="option2")
{
	$sql="insert into Pharm values('$name','$user','$pass','$date','$contact','$date')";
	$sql1="select * from Pharm where Username='$user'";
	$prof='s';
}
else
{
	$sql="insert into Patient values('$name','$user','$pass','$date','$contact','$date')";
	$sql1="select * from Patient where Username='$user'";
	$prof='p';
}
ini_set('display_errors', 1);

$result1=mysqli_query($conn,$sql1);
$count=mysqli_num_rows($result1);
if($count>0)
{
	echo "SIGN-UP UNSUCCESSFULL!<br>ANOTHER USER HAS THE SAME USERNAME, PLEASE CHOOSE A DIFFERENT USERNAME FOR REGISTERING<br>Redirecting you to the main page.....<br>";
	echo "<meta http-equiv=\"refresh\" content=\"5;URL=home_alt.html\" />";
}
else
{
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo "SIGN-UP SUCCESSFUL!<br>Redirecting you to the login page....<br>";
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=home_alt.html\" />";
	}
	else
	{
		echo "Error : ".mysqli_error($conn)."<br>";
	}
}
?>
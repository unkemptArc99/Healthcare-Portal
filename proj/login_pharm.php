<?php
session_start();
$user=$_POST["usernamepharm"];
$pass=$_POST["userpasspharm"];

$dbname="FinalProject";
$servername="localhost";
$username="root";
$password="Mandabarca1!t";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

$sql="select * from Pharm where Username='$user' and Password='$pass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
	$_SESSION['login_user']=$user;
	$_SESSION['db_name']=$dbname;
	setcookie(md5('s'),'S',false,'/');
	setcookie('usernamepharm',$user,false,'/');
	setcookie('userpasspharm',$pass,false,'/');
	echo "LOGIN SUCCESSFUL.<br>Redirecting you automatically...";
	echo "<meta http-equiv=\"refresh\" content=\"5;URL=pharmlog.html\"/>";
}
else
{
	echo "LOGIN UNSUCCESSFUL. INVALID CREDENTIALS.<br>Redirecting you back to login page...";
	echo "<meta http-equiv=\"refresh\" content=\"3;URL=home_alt.html\" />";
}
?>
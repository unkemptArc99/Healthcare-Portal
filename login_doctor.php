<?php
session_start();
$user=$_POST["usernamedoc"];
$pass=$_POST["userpassdoc"];

$dbname="FinalProject";
$servername="localhost";
$username="root";
$password="Mandabarca1!t";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}
echo $user;
$sql="select * from Staff where Username='$user' and Password='$pass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
	$_SESSION['login_user']=$user;
	$_SESSION['db_name']=$dbname;
	header("Location: doclogin.html");
}
else
{
	echo "Wr";
}
?>
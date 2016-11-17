<?php
session_start();
$user=$_POST["usernamepat"];
$pass=$_POST["userpasspat"];

$dbname="proj";
$servername="localhost";
$username="root";
$password="pulz@sql";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

$sql="select * from Patient where Username='$user' and Password='$pass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
	$_SESSION['login_user']=$user;
	$_SESSION['db_name']=$dbname;
	setcookie(md5('p'),'P',false,'/');
	setcookie('usernamepat',$user,false,'/');
	setcookie('userpasspat',$pass,false,'/');
	echo "<center>LOGIN SUCCESSFUL.<br>Redirecting you automatically...</center>";
	echo "<meta http-equiv=\"refresh\" content=\"5;URL=patientlog.html\"/>";
}
else
{
	echo "<center>LOGIN UNSUCCESSFUL. INVALID CREDENTIALS.<br>Redirecting you back to login page...</center>";
	echo "<meta http-equiv=\"refresh\" content=\"3;URL=home_alt.html\" />";
}
mysqli_close($conn);
?>
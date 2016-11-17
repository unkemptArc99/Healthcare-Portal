<?php
session_start();
$user=$_POST["usernamedoc"];
$pass=$_POST["userpassdoc"];

$dbname="proj";
$servername="localhost";
$username="root";
$password="pulz@sql";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

$sql="select * from Doctor where Username='$user' and Password='$pass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
	$_SESSION['login_user']=$user;
	$_SESSION['db_name']=$dbname;
	setcookie(md5('d'),'D',false,'/');
	setcookie('usernamedoc',$user,false,'/');
	setcookie('userpassdoc',$pass,false,'/');
	echo "<center>LOGIN SUCCESSFUL.<br>Redirecting you automatically...</center>";
	echo "<meta http-equiv=\"refresh\" content=\"1;URL=doclogin1.php\"/>";
}
else
{
	echo "<center>LOGIN UNSUCCESSFUL. INVALID CREDENTIALS.<br>Redirecting you back to login page...</center>";
	echo "<meta http-equiv=\"refresh\" content=\"3;URL=home_alt.html\" />";
}
mysqli_close($conn);
?>

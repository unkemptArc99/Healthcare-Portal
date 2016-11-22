<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript  " defer src="https://code.getmdl.io/1.2.1/material.min.js"> </script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel="stylesheet" href="material.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css"> 


</head>
<body >
 <style type="text/css">
            #loader{
                    width: 100%;
                    height: 100%;
                    opacity: ;
                    position: fixed;
                    z-index: 1000;
                    top: 0;
                    left: 0;
                    background:black;
            }
            #loader_image{
                position: fixed;
                width: 50px;
                height: 25px;
                align-content: center;
                text-align: center;
                margin-top: 200px;
                margin-left: 600px;

            }
            #mob_text{
                 font-size: 20px;
                 color: white;
                 width:10%;
                 box-sizing: border-box;
                 padding: 20px;
                 position: relative;
                 text-align: center;
                 top:53%;
             }
        </style>
<?php
session_start();
$user=$_POST["usernamesup"];
$pass=$_POST["userpasssup"];
$name=$_POST["namesup"];
$date=$_POST["datepicker"];
$type=$_POST["profession"];
$contact=$_POST["contact"];
$email=$_POST["email"];

$dbname="FinalProject";
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$dbname);
	
if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

$sql=$sql1="";
$prof="";

if($type=="option1")
{
	$sql="insert into Doctor values('$name','$user','$pass','$date','$contact','$date','$email')";
	$sql1="select * from Doctor where Username='$user'";
	$prof='d';
}
elseif($type=="option2")
{
	$sql="insert into Pharm values('$name','$user','$pass','$date','$contact','$date','$email')";
	$sql1="select * from Pharm where Username='$user'";
	$prof='s';
}
else
{
	$sql="insert into Patient values('$name','$user','$pass','$contact','$date','$email')";
	$sql1="select * from Patient where Username='$user'";
	$prof='p';
}
ini_set('display_errors', 1);

$result1=mysqli_query($conn,$sql1);
$count=mysqli_num_rows($result1);
if($count>0)
{
	echo "<center>SIGN-UP UNSUCCESSFULL!<br>ANOTHER USER HAS THE SAME USERNAME, PLEASE CHOOSE A DIFFERENT USERNAME FOR REGISTERING<br>Redirecting you to the main page.....<br></center>";
	echo "<meta http-equiv=\"refresh\" content=\"5;URL=home_alt.html\" />";
}
else
{
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<div id="loader">
        <div id="loader_image">
            <img src="Preloader_7.gif" width="290%" height="590%">
        </div>
</div>';
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=home_alt.html\" />";
	}
	else
	{
		echo "<center>Error : ".mysqli_error($conn)."<br></center>";
	}
	mysqli_close($conn);
}
?>


   <script type="text/javascript">
   $(document).ready(function(){
   $('#loader').delay(200).fadeOut(30000);
   });
            
</script>
   



</body>
</html>


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
$user=$_POST["usernamepharm"];
$pass=$_POST["userpasspharm"];

$dbname="FinalProject";
$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}
echo $user."<br>".$pass."<br>";
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
	echo '<div id="loader">
        <div id="loader_image">
            <img src="Preloader_7.gif" width="290%" height="590%">
        </div>
</div>';
	echo "<meta http-equiv=\"refresh\" content=\"5;URL=pharmlog.html\"/>";
}
else
{
	echo " INVALID CREDENTIALS.Redirecting you back to login page...";
	echo "<meta http-equiv=\"refresh\" content=\"3;URL=home_alt.html\" />";
}
mysqli_close($conn);
?>

   <script type="text/javascript">
   $(document).ready(function(){
   $('#loader').delay(200).fadeOut(30000);
   });
            
</script>
   



</body>
</html>


<?php

$q=$_POST["pat"];



$dbname="proj";
$servername="localhost";
$username="root";
$password="pulz@sql";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
else
{
     echo $q;

}

$sql="select* from Patient where Username='$q'";
$result=mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) {
    echo $row['PatientName'] ;
    echo $row['Username'] ;
    
}


mysqli_close($con);
?>

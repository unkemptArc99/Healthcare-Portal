<?php
require_once "Mail.php";
$dbname="FinalProject";
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$aid=$_POST['aid'];
$option=$_POST['radio'];
$username=$_COOKIE['usernamedoc'];

if($option=="cnf")
{
	$sql="update Appointment set Status=1 where AppointmentID='$aid'";
	$result=mysqli_query($conn,$sql);
	if(!$result)
		echo mysqli_error($conn);
	$sql1="select * from Appointment where AppointmentID='$aid'";
	$result1=mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_assoc($result1))
	{
		$pid=$row['PatientUsrName'];
		$sql2="select * from Patient where Username='$pid'";
		$result2=mysqli_query($conn,$sql2);
		while($row1=mysqli_fetch_assoc($result2))
		{
			$from = "no_reply@hospital.in";
          	$to = $row1['Email'];
          	$subject = "An appointment cancelled!";
          	$body = "Hi, Your appointment id ".$aid." has been scheduled by the doctor.";
          	$host = "mail.students.iitmandi.ac.in";
          	$username = "abhishek_a_s";
          	$password = "";
          	$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);
          	$smtp = Mail::factory('smtp',array ('host' => $host,'auth' => true,'username' => $username,'password' => $password));
          	if (PEAR::isError($smtp)) 
          	{
           		echo("<p>" . $smtp->getMessage() . "</p><p>".$smtp->getUserInfo()."</p>");
           		die;
          	} 
          	else {
          		echo("<p></p>");
          	}

          	$mail = $smtp->send($to, $headers, $body, "From: ".$from);
 
          	if (PEAR::isError($mail)) {
          		echo("<p>" . $mail->getMessage() . "</p>");
         	}
         	else {
          		echo("<meta http-equiv=\"refresh\" content=\"1;URL=../apptview.php\" />");
         	}
		}
	}
}
else
{
	$sql1="select * from Appointment where AppointmentID='$aid'";
	$result1=mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_assoc($result1))
	{
		$pid=$row['PatientUsrName'];
		$sql2="select * from Patient where Username='$pid'";
		$result2=mysqli_query($conn,$sql2);
		while($row1=mysqli_fetch_assoc($result2))
		{
			$from = "no_reply@hospital.in";
          	$to = $row1['Email'];
          	$subject = "An appointment generated!";
          	$body = "Hi, Your appointment id ".$aid." has been cancelled by the doctor.";
          	$host = "mail.students.iitmandi.ac.in";
          	$username = "abhishek_a_s";
          	$password = "";
          	$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);
          	$smtp = Mail::factory('smtp',array ('host' => $host,'auth' => true,'username' => $username,'password' => $password));
          	if (PEAR::isError($smtp)) 
          	{
           		echo("<p>" . $smtp->getMessage() . "</p><p>".$smtp->getUserInfo()."</p>");
           		die;
          	} 
          	else {
          		echo("<p></p>");
          	}

          	$mail = $smtp->send($to, $headers, $body, "From: ".$from);
 
          	if (PEAR::isError($mail)) {
          		echo("<p>" . $mail->getMessage() . "</p>");
         	}
         	else {
         		$sql="delete from Appointment where AppointmentID='$aid'";
				$result=mysqli_query($conn,$sql);
          		echo("<meta http-equiv=\"refresh\" content=\"1;URL=../apptview.php\" />");
         	}
		}
	}
}
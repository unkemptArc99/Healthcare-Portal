<?php
 require_once "Mail.php";
 
 $from = "no_reply@hakerz.in";
 $to = "dhruv_patel@students.iitmandi.ac.in";
 $subject = "Hi!";
 $body = "Hi,\n\nChutiya!!";
 
 $host = "mail.students.iitmandi.ac.in";
 $username = "abhishek_a_s";
 $password = "";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 if (PEAR::isError($smtp)) {
   echo("<p>" . $smtp->getMessage() . "</p><p>".$smtp->getUserInfo()."</p>");
   die;
  } else {
   echo("<p>Message successfully sent!</p>");
  }

 $mail = $smtp->send($to, $headers, $body, "From: ".$from);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>
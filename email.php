<html>
<body>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $to = "shobhit24297@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  $sent = mail($to, "$subject", $comment, "From:" . $email);
  
  //Email response
  if($sent){
  echo "Thank you for contacting us!";
  }
      else
      {
  echo "Error sending mail!";
      }
  }
  //if "email" variable is not filled out, display the form
  //else {
?>
    </body>
</html>
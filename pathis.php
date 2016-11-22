<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
<script type ="text/javascript" defer src="https://code.getmdl.io/1.2.1/material.min.js"> </script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel="stylesheet" href="material.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css"> 
<link rel="stylesheet" href="styles.css">


</head>
<body style="z-index:1">


    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row" style="background-color:black;height:80px">
          <h3 style="color:white;">Doctor's Portal</h3>
          <div class="mdl-navigation__link mdl-typography--" style="font-size:20px;float:right;background-color:green;margin-left:22%"><?php
          $dbname="FinalProject";
          $servername="localhost";
          $username="root";
          $password="";

         $conn=mysqli_connect($servername,$username,$password,$dbname);
          if(!$conn)
            die("Connection Failed: ".mysqli_connect_error());
          $cookiename=md5('d');
          if(isset($_COOKIE[$cookiename]))
          {
            $username=$_COOKIE['usernamedoc'];
            $query="select * from Doctor where Username='$username'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result))
            {
              echo "  Hi Dr. ".$row['DocName']."!<br>";
            }
          }
          else
          {
            echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to login page.";
            echo "<meta http-equiv=\"refresh\" content=\"5;URL=home_alt.html\"/>";
          }
          mysqli_close($conn);
          ?></div>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field" placeholder="  Medicine search" style="font-style:italic">
            </div>
          </div>
          <!-- Navigation -->
          
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">

               <a class="mdl-navigation__link mdl-typography--" href="logout.php" style="cursor:pointer">Logout</a>
               <a class="mdl-navigation__link mdl-typography--" href=""></a>

               
            </nav>
          </div>
          
        </div>
      </div>


      <div  class="android-drawer mdl-layout__drawer" style="display:">
        <div class="mdl-layout-title" ">
          <img class="pharmacy" src="img-3.png" width="120px" style="margin-top:20px">
        </div>
        <nav class="mdl-navigation" style="font-style:italic;">
          <a class="mdl-navigation__link" href="doclogin1.php"><b>Home</b></a>
          <a id="appt" class="mdl-navigation__link" href="newappt1.php"><b>New Appointment</b></a>
          <a id="appt" class="mdl-navigation__link" href="pathis.php"><b>Search Patient History</b></a>
             
        </nav>
      </div>
      <main class="mdl-layout__content" style="" >
      <div style="z-index:10;position:relative">
         <img  src="doc.jpg" style="height:550px; width : 1365px; opacity: 0.5;position:absolute">
     
       <div style="background-color:#4C5A65;padding:50px 50px 30px;margin:50px 920px;position:absolute;moz-border-radius:16px;-webkit-border-radius:16px;border-radius:16px;opacity:0.7;height:110px; width: 200px">
       </div>
       <div style="position:absolute;margin:50px 920px">
        <b><h5 style="color:green; font-style:italic;margin:20px 90px">Patient id</h5></b>
        <form action="" method="POST">
          <input id ="pat" name="pat" type="text" name="search" placeholder="Search.." style="font-style:italic">
           <center> <button id="srch" name="srch" style="margin-top:20px" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--primary" type="submit">Search</button></center>
        </form>
        
       </div>
   
     </div>
     <div id="hist" style="display:none; background-color:#4C5A65;padding:50px 50px 30px;margin:50px 120px;position:absolute;moz-border-radius:16px;-webkit-border-radius:16px;border-radius:16px;opacity:;height:310px; width: 260px">
       </div>
     <div id="histin" style="display: block ; position:absolute">
         <table class="mdl-data-table mdl-js-data-table" style="position:absolute; z-index:11;margin: 80px 150px; ">
  <thead>
    <tr >
      <th class="mdl-data-table__cell--non-numeric">Date</th>
      <th class="mdl-data-table__cell--non-numeric">AppointmentID</th>
      <th class="mdl-data-table__cell--non-numeric">PrescriptionID</th>
      <th class="mdl-data-table__cell--non-numeric">MedicineID</th>
      <th class="mdl-data-table__cell--non-numeric">Quantity</th>
      <th class="mdl-data-table__cell--non-numeric">Dosage</th>
      </tr>
  </thead>
  <tbody>
  <?php
  if(isset($_POST['pat'])) {
  $q = $_POST['pat'];
  if($q != "") {
  $dbname="FinalProject";
  $servername="localhost";
  $username="root";
  $password="";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn)
  {
    die("Connection Failed: ".mysqli_connect_error());
  }
  $sql="select * from Appointment where PatientUsrName='$q'";
  $result=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result))
  {
    $app=$row['AppointmentID'];
    $sql1="select * from Prescription where AppointmentID='$app'";
    $result1=mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
    echo '<tr>
      <td class="mdl-data-table__cell--non-numeric">'.$row1['Date'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row1['AppointmentID'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row1['PrescriptionID'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row1['MedicineID'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row1['Qty'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row1['Dosage'].'</td>
      </tr>';
    }
  }
}mysqli_close($conn);}?>
</tbody>
</table>
</div>
     
  
    
     </main>
       
<style type="text/css">
   #pat {
    width: 80%
    box-sizing: border-box;
    margin:4px 25px;
    background-image: url('search.jpeg');
    background-size: 20px 20px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 13px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
</style>  
    
<script>
var btn = document.getElementById('srch'); 
var hist = document.getElementById('hist');
var histin = document.getElementById('histin');
var back = document.getElementById('back');
 btn.onclick= function () {
  $('#hist').hide().fadeIn(500);
  $('#histin').hide().fadeIn(500);
  $('#back').hide().fadeIn(500);
 
  }
  
</script>    
</main>
  </div>   
</html>
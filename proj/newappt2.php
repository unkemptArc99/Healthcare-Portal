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
<body  style="z-index:1">


    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div id ="bod" class="mdl-layout__header-row" style="background-color:black;height:80px;visibility:visible">
          <h3 style="color:white;">Doctor's Portal</h3>
          <div class="mdl-navigation__link mdl-typography--" style="font-size:20px;float:right;background-color:green;margin-left:260px">
            <?php
          $conn=mysqli_connect("localhost","root","Mandabarca1!t","FinalProject");
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
              echo "Welcome Dr. ".$row['DocName']."!<br>";
            }
          }
          else
          {
            echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to login page.";
            echo "<meta http-equiv=\"refresh\" content=\"5;URL=home_alt.html\"/>";
          }
          mysqli_close($conn);
          ?>
          </div>
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
               <div id ="btn2" class="mdl-navigation__link mdl-typography--" href="" style="cursor:pointer">Cancel  </div>
               

               
            </nav>
          </div>
          
        </div>
      </div>


      <div id="drawer"  class="android-drawer mdl-layout__drawer" style="display:block">
        <div class="mdl-layout-title" ">
          <img class="pharmacy" src="img-3.png" width="120px" style="margin-top:20px">
        </div>
        <nav class="mdl-navigation" style="font-style:italic;">
          <a class="mdl-navigation__link" href="doclogin1.php"><b>Home</b></a>
          
             
        </nav>
      </div>
      <main class="mdl-layout__content" style="" >
      <div style="z-index:10;position:relative">
         <img  src="doc.jpg" style="height:550px; width : 1365px; opacity: 0.5;position:absolute">
     
       <div style="background-color:#4C5A65;padding:50px 50px 30px;margin:50px 920px;position:absolute;moz-border-radius:16px;-webkit-border-radius:16px;border-radius:16px;opacity:0.5;height:120px; width: 200px">
       </div>
       <div style="position:absolute;margin:50px 920px; height:100px">
        <b><h5 style=" font-style:italic;margin:20px 90px">Patient id</h5></b>
        <form action="newappt2.php" method="POST">
          <input id ="search" type="text" name="search" placeholder="Search.." style="font-style:italic">
          <center> <button id="srch" style="margin-top:20px" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--primary" type="button">Search</button></center>
        </form>
       </div>
       <div id="appt" style="display:none;background-color:#ffffff;padding:50px 50px 30px;margin:50px 300px;position:absolute;moz-border-radius:16px;-webkit-border-radius:16px;border-radius:16px;opacity:0.5;height:370px; width: 270px ;border: 3px solid black;">
       <img src="logo.png" style="opacity:0.3 ;margin-top:30px ;height:240px">
       </div>
       <div id="dispin" style="position:absolute;margin:50px 300px; display:none">
        <center><h5 style="color:; font-style:italic;margin-left:12px"><b>New Appointment</b></h5></center>
        
        <ul style="font-style:italic;color:">
        <form action="generateappt.php" method="POST">
        <?php
          $conn=mysqli_connect("localhost","root","Mandabarca1!t","FinalProject");
          if(!$conn)
            die("Connection Failed: ".mysqli_connect_error());
          $user=$_POST["search"];
          $sql="select * from Patient where Username='$user'";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "<li style=\"color:green\"><b>Name: ".$row['PatientName']."</b></li><br>
          <li style=\"color:green\"><b>Roll no: ".$row['Username']."</b></li>";
          mysqli_close($conn);
          ?>
          <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="patientid" name="patientid"style="font-style:italic" value="<?php $user=$_POST['search']; echo $user;?>" />
            <!--<label class="mdl-textfield__label" for="patientid" style=" color:green;font-size:14px" ><b>Write the Roll No. of the Patient</b></label>-->
          </div>
          <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="desc" name="desc" style="font-style:italic" />
            <label class="mdl-textfield__label" for="desc" style=" color:green;font-size:14px" ><b>Problem:</b></label>
          </div>
          </li>
           <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="med" name="med" style="font-style:italic"  />
            <label class="mdl-textfield__label" for="med" style=" color:green;font-size:14px" ><b>Medicine:</b></label>
          </div>
          </li>
           <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="dos" name="dos" style="font-style:italic "" />
            <label class="mdl-textfield__label" for="dos" style=" color:green;font-size:14px" ><b>Dosage</b></label>
          </div>
          </li>
           <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="comm" name="comm"  style="font-style:italic" />
            <label class="mdl-textfield__label" for="comm" style=" color:green;font-size:14px" ><b>Comments:</b></label>
          </div>
          </li>
        <center> <button id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--red" type="button">Generate</button></center>
<div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar " style="margin-left:230px">
  <div class="mdl-snackbar__text" style="margin-left:40px"></div></center>
  <center><button class="mdl-snackbar__action" type="button"></button></center>
</div>
</form>
<script>
(function() {
  var flag=0;
  'use strict';
  var snackbarContainer = document.querySelector('#demo-snackbar-example');
  var showSnackbarButton = document.querySelector('#demo-show-snackbar');
  showSnackbarButton.addEventListener('click', function() {
    'use strict';
  
    var data = {
      message: 'Appointment id   ',
      timeout: 8000,
     
    };
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
    flag=1;
  });
}());
</script>

<script>
  document.getElementById("demo-show-snackbar").addEventListener("click",function () {
  var timeoutID = window.setTimeout(function () {
      location.reload();
  }, 9000);
});
 
</script>
          
         </form>

        </ul>

       </div>

<center>
       <div id="myModal2" class="modal2" style="z-index:1000; ">
  <div class="modal-content" style="position:absolute;margin-top:100px;margin-left:430px;background-color:white;opacity:0.9">
     <div class="mdl-card__title mdl-color-- mdl-color-text--red" style="margin-top:8px;margin-left:8px;margin-right:8px">
      
        <h6 class="mdl-card__title-text" style="margin-left:8px; font-style:italic ; "><b>Warning </b></h6><br><br>
        
       
      </div>

      <div style="font-size:15px; font-style:italic;margin-left:38px;margin-top::;px;position:absolute;">
          Are you Sure you want to cancel!
        </div>
      <div style="position:absolute;margin-top:60px;margin-left:38px">
       <span  class="stay" style="margin-left:px; position:absolute">yes</span>
       <span class="close2" style="margin-left:55px; position:absolute">No</span>
   
      </div>
  </div>
  </div>
  </center>

    
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
  #inpt {
    
   
    
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 13px;
    background-color: white;
 
    background-repeat: no-repeat;
    padding: 2px 2px 2px 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    overflow: none;
}
}
</style>  

<script>
// Get tffhe modal
var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("btn2");
var span2 = document.getElementsByClassName("close2")[0];
btn2.onclick = function() {
    $('.modal2').hide().fadeIn(200);
     getElementById("bod").visibility="Hidden";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target==modal2) {
      
  }
var btn = document.getElementById('srch'); 
var appt = document.getElementById('appt');
var dispin = document.getElementById('dispin');
 var yes = document.getElementsByClassName("stay")[0];
 
 btn.onclick= function () {
  $('#appt').hide().fadeIn(500);
   $('#dispin').hide().fadeIn(1000);
  }
  yes.onclick= function () {
    $('#appt').hide().fadeOut(500);
   $('#dispin').hide().fadeOut(1000);
    modal2.style.display = "none";
  }
 
}
</script>

<style>
  .modal2{
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}
/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    border: 1px solid #888;
    width: 40%;
    height: 25%
}
/* The Close Button */
.close2, .stay {
    color: #aaaaaa;
    float: right;
    font-size: 18px;
    font-weight: bold;
}
.close2:hover,
.close2:focus ,
.stay:hover,
.stay:focus{
  background-color: ;
    color: #000;
    text-decoration: ;
    cursor: pointer;
}
</style>
    




</main>

  </div>   



</html>
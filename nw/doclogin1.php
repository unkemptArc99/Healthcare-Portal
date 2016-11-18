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
          <div class="mdl-navigation__link mdl-typography--" style="font-size:20px;float:right;background-color:green;margin-left:290px">
          <?php
          $dbname="FinalProject";
          $servername="localhost";
          $username="root";
          $password="Mandabarca1!t";

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
            echo "<center>YOU HAVE BEEN LOGGED OUT.<center>";
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
               <a class="mdl-navigation__link mdl-typography--" href="doclogin1.php">Home</a>

               
            </nav>
          </div>
          
        </div>
      </div>


      <div  class="android-drawer mdl-layout__drawer" style="display:">
        <div class="mdl-layout-title" ">
          <img class="pharmacy" src="img-3.png" width="120px" style="margin-top:20px">
        </div>
        <nav class="mdl-navigation" style="font-style:italic;">
          <a class="mdl-navigation__link" href=""><b>Home</b></a>
          <a id="appt" class="mdl-navigation__link" href="newappt.php"><b>New Appointment</b></a>
          <a id="appt" class="mdl-navigation__link" href="pathis.php"><b>Search Patient History</b></a>
             
        </nav>
      </div>


      <main class="mdl-layout__content" >
      <div style="z-index:-1;position:relative">
      <div style="position:absolute ;z-index:10; ">
      

<span style="position:absolute; margin:130px 50px" class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 style="margin-left:14px" class="mdl-card__title-text">New Appt</h2>
  </div>
  <div class="mdl-card__supporting-text">
   New Appointment generation portal
  </div>
 <div  align="center" style="background-color:mdl-color--blue"  class="mdl-card__actions mdl-card--border">
     <a href="newappt.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
       New Appointment
    </a>

  </div>
</span>

<span style="position:absolute; margin:130px 410px" class="demo-card-square2 mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 style="margin-left:1px" class="mdl-card__title-text">Search</h2>
  </div>
  <div style="" class="mdl-card__supporting-text">
   Search The Patient History
  </div>
  <div  align="center" style="background-color:mdl-color--blue"  class="mdl-card__actions mdl-card--border">
     <a href="pathis.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
       Patient History
    </a>

  </div>
</span>




       <div style="position:absolute;opacity:0.6; ">
         <img  src="doc.jpg" style="height:610px; width :1360px;">
       </div>
      </div>

        
      </div>


     <style>
.demo-card-square.mdl-card,.demo-card-square2.mdl-card {
  width: 300px;
  height: 380px;
  border-radius: 0px;
  text-shadow: 20px

}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('newappt.jpg') no-repeat #46B6AC ; size: 0px;
  background-size: 140%;
  opacity: 0.8;

}

.demo-card-square2 > .mdl-card__title {
  color: #fff;
  background:
    url('pres.jpg') no-repeat #46B6AC ; 
  background-size: 140%;
  opacity: 0.8;

}
</style>


</main>
    




</main>

  </div>   



</html>



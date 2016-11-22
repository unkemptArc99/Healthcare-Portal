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
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>
<body style="z-index:1">


    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row" style="background-color:black;height:80px">
          <h3 style="color:white">Welcome Patient</h3>
          <div class="mdl-navigation__link mdl-typography--" style="font-size:20px;float:right;background-color:green;margin-left:22%">
        <?php
          $dbname="FinalProject";
          $servername="localhost";
          $username="root";
          $password="";

          $conn=mysqli_connect($servername,$username,$password,$dbname);
          if(!$conn)
            die("Connection Failed: ".mysqli_connect_error());
          $cookiename=md5('p');
          if(isset($_COOKIE[$cookiename]))
          {
            $username=$_COOKIE['usernamepat'];
            $query="select * from Patient where Username='$username'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result))
            {
              echo "  Hi ".$row['PatientName']."!<br>";
            }
          }
          else
          {
            echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to login page.";
            echo "<meta http-equiv=\"refresh\" content=\"2;URL=home_alt.html\"/>";
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
               <a class="mdl-navigation__link mdl-typography--" href="home_alt.html" style="cursor:pointer">Logout</a>
               <a class="mdl-navigation__link mdl-typography--" href="">Home</a>
               
            </nav>
          </div>
          
        </div>
      </div>


      <div  class="android-drawer mdl-layout__drawer" style="display:">
        <div class="mdl-layout-title" ">
          <img class="pharmacy" src="img-1.png" style="margin-top:20px;width:120px">
        </div>
        <nav class="mdl-navigation" style="font-style:italic;">
          <a class="mdl-navigation__link" href="patientlog.php"><b>Home</b></a>
          <a class="mdl-navigation__link" href="set.php"><b>Set Appointment</b></a>
          <a class="mdl-navigation__link" href="view.php"><b>View Appt status</b></a>
          
        </nav>
      </div>


      <main class="mdl-layout__content" style="background-color:grey; opacity:" >

      <div style="z-index:10;position:relative; ">  
        <div style="position:absolute; margin:0px 300px" >
         <img  src="pat.png" style="height:450px;">
        </div> 
       <div style="margin-left:150px;position:relative"> 
        <div style="position:abasolute;margin-top:40px">
          <h4 style="font-style:; margin-left:40px">Set Appointment</h4>
        </div>

   <form style="margin-top:40px" action="pear/set_back.php" method="POST">
          <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">

            <input class="mdl-textfield__input" type="text" id="date" name="date" style="font-style:italic" />
            <label class="mdl-textfield__label" for="date" style=" color:black;font-size:14px" ><b>Date(YYYY-MM-DD)</b></label>
          </div>
          </li>
          
          <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">

            <input class="mdl-textfield__input" type="text" id="prob" name="prob" style="font-style:italic" />
            <label class="mdl-textfield__label" for="prob" style=" color:black;font-size:14px" ><b>Problem:</b></label>
          </div>
          </li>
           <li>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="did" name="did" style="font-style:italic"  />
            <label class="mdl-textfield__label" for="did" style=" color:black;font-size:14px" ><b>Doctor ID:</b></label>
          </div>
          </li>
          
         <button  style="margin-top:10px; margin-left:90px" id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--red" type="submit">Set</button>
         </form>


   <table class="mdl-data-table mdl-js-data-table" style="position:absolute; z-index:11;margin: 80px 20px; ">
  <thead>
  
  </tr>
    <tr >
      <th class="mdl-data-table__cell--non-numeric">Doctor Id</th>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th class="mdl-data-table__cell--non-numeric">Email</th>
      </tr>
  </thead>
  <tbody>
    <?php

  $dbname="FinalProject";
  $servername="localhost";
  $username="root";
  $password="";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sq="select * from Doctor ";
  $res=mysqli_query($conn,$sq);
  while($row = mysqli_fetch_array($res))
  {
    echo '<tr>
      <td class="mdl-data-table__cell--non-numeric">'.$row['Username'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row['DocName'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row['Email'].'</td>
      </tr>';
  }

mysqli_close($conn);

?>
 </tbody>
  </tbody>
</table>      

     




</main>
  <script>
      $( function() {
      $( "#datepicker" ).datepicker();
      } );
  </script>

 




  </div>   


</html>



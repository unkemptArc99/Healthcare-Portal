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
          <h3 style="color:white">Pharmacy</h3>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div id="srch" class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
            <form action="" method="POST">
              <input class="mdl-textfield__input" type="text" id="search-field" name="search" placeholder="  Search Appt" style="font-style:italic">
              </form>
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
               <a class="mdl-navigation__link mdl-typography--" href="logout.php" style="cursor:pointer">Logout</a>
               <a class="mdl-navigation__link mdl-typography--" href="">Home</a>

            </nav>
          </div>

        </div>
      </div>


      <div  class="android-drawer mdl-layout__drawer" style="display:">
        <div class="mdl-layout-title" ">
          <img class="pharmacy" src="Pharmacy-Management1.png" style="margin-top:20px">
        </div>
        <nav class="mdl-navigation" style="font-style:italic;">
          <a class="mdl-navigation__link" href="pharmlog.php"><b>Home</b></a>
          <a class="mdl-navigation__link" href="update.php"><b>Update Medicines</b></a>
          <a class="mdl-navigation__link" href="search1.php"><b>Search Appt</b></a>

        </nav>
      </div>


      <main class="mdl-layout__content" >
        <div id="histin" style="width:100% ; position:absolute">

            <?php
            $dbname="FinalProject";
            $servername="localhost";
            $username="root";
            $password="";
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            if(isset($_POST['search'])) {
            $q = $_POST['search'];
            if($q != "") {
              $sql1="select * from Prescription where AppointmentID='$q'";
              $result1=mysqli_query($conn,$sql1);
              $sql="create table New(price int(11) not null)";
              $result=mysqli_query($conn,$sql);
              $sql="create trigger ins_sum after insert on New for each row set @sum=@sum+NEW.price";
              $result=mysqli_query($conn,$sql);
              $sql="set @sum=0";
              $result=mysqli_query($conn,$sql);
              while($row1=mysqli_fetch_assoc($result1))
              {
                $med=$row1['MedicineID'];
                $sql2="select * from Medicine where MedicineID='$med'";
                $result2=mysqli_query($conn,$sql2);
                while($row=mysqli_fetch_assoc($result2))
                {
                  $price=((int)$row1['Qty'])*((int)$row['Price']);
                  $sql="insert into New values($price)";
                  $result=mysqli_query($conn,$sql);
                }
              }
              $sql="select @sum as 'Sum'";
              $result=mysqli_query($conn,$sql);
              $totp=0;
              while($row2=mysqli_fetch_assoc($result))
              {
                $totp=(int)$row2['Sum'];
              }
              $sql="drop trigger test.ins_sum";
              $result=mysqli_query($conn,$sql);
              $sql="drop table New";
              $result=mysqli_query($conn,$sql);
              echo "<center><h2> The price is: Rs ".$totp.".</h2></center>";
            }
          }
            mysqli_close($conn);
          ?>

     <img  src="pharm.jpg" style="height:680px; width :1360px;">
      </div>


      </div>


<script>


</script>


</main>

  </div>



</html>

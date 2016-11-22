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
          <a class="mdl-navigation__link" href=""><b>Home</b></a>
          <a class="mdl-navigation__link" href="update.php"><b>Update Medicines</b></a>
          <a class="mdl-navigation__link" href="search.php"><b>Search Appt</b></a>
                
        </nav>
      </div>


      <main class="mdl-layout__content" >
      <div style="z-index:-1;position:relative">
      <div style="position:absolute ;z-index:10; ">
        
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

}
  mysqli_close($conn);
?>
</tbody>
</table>
</div>
      </div>


              
    
          


      
      
         <img  src="pharm.jpg" style="height:680px; width :1360px;">
      </div>

        
      </div>


<script>


</script>


</main>

  </div>   



</html>



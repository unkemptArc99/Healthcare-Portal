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
              <input class="mdl-textfield__input" type="text" id="search-field" placeholder="  Medicine search" style="font-style:italic">
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
          <a class="mdl-navigation__link" href="search1.php"><b>Search Appt</b></a>
                
        </nav>
      </div>


      <main class="mdl-layout__content" >
      <div style="z-index:-1;position:relative">
      <div style="position:absolute ;z-index:10; ">


              

        <div style="border-radius: 90px; position:absolute;height:200px; width:600px; background-color:white; margin:20px 150px">
          <!-- Colored FAB button with ripple -->
<form action="" method="POST"> 
<div style="position:absolute; margin-left:12% ; width:100%; font-size:180px">
 <span style="width:80px;font-size:30px"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="id" name="id" style="width:;font-style:italic;color:black" />
            <label class="mdl-textfield__label" for="id" style=" font-weight:bold; color:blue;font-size:14px" >ID</label>
          </span>

 <span style="width:150px"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="med" name="med" style="width:;font-style:italic;color:black" />
            <label class="mdl-textfield__label" for="med" style=" font-weight:bold; color:blue;font-size:14px" >MEDICINE</label>
          </span>
 <span style="width:50px"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="qty" name="qty" style="width:;font-style:italic;color:black" />
            <label class="mdl-textfield__label" for="qty" style=" font-weight:bold; color:blue;font-size:14px" >QTY</label>
          </span>
 <span style="width:50px"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="font-style:italic">
            <input class="mdl-textfield__input" type="text" id="price" name="price" style="width:;font-style:italic;color:black" />
            <label class="mdl-textfield__label" for="qty" style=" font-weight:bold; color:blue;font-size:14px" >PRICE</label>
          </span>   
 <span style="margin-left:8%">
   <!-- Colored FAB button with ripple -->
<button id="add" name="add" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
  <i class="material-icons">add</i>
</button>
 </span>    

 <span>
   <!-- Colored FAB button with ripple -->
<button id="up" name="up" class="mdl-button mdl-js-button  mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
  <i class="material-icons">update</i>
</button>
 </span>    

 <span>
   <!-- Colored FAB button with ripple -->
<button id="del" name="del" class="mdl-button mdl-js-button  mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
  <i class="material-icons">delete</i>
</button>
 </span>          
</div>
</form>
</div>   
        </div>
        <table id="tab" class="mdl-data-table mdl-js-data-table" style="position:absolute; z-index:11;margin: 70px 65%; ">
  <thead>
    <tr >
      <th class="mdl-data-table__cell--non-numeric">ID</th>
      <th class="mdl-data-table__cell--non-numeric">Medicine</th>
      <th class="mdl-data-table__cell--non-numeric">Qty</th>
      <th class="mdl-data-table__cell--non-numeric">Price</th>
      </tr>
  </thead>
  <tbody>
  <?php

  $dbname="FinalProject";
  $servername="localhost";
  $username="root";
  $password="";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sq="select* from Medicine ";
  $res=mysqli_query($conn,$sq);
  while($row = mysqli_fetch_array($res))
  {
    echo '<tr>
      <td class="mdl-data-table__cell--non-numeric">'.$row['MedicineID'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row['MedicineName'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row['Quantity'].'</td>
      <td class="mdl-data-table__cell--non-numeric">'.$row['Price'].'</td>
      </tr>';
  }


  if(isset($_POST['add'])) {
  $q = $_POST['id'];
  $q1=$_POST['med'];
  $q2=$_POST['qty'];
  $q4=$_POST['price'];
  $q3=(int)$q2;
  $q5=(int)$q4;

  if($q != "") {
  
  if(!$conn)
  {
    die("Connection Failed: ".mysqli_connect_error());
  }
  $sql="insert into Medicine values('$q','$q1',$q3,$q5)";
  $result=mysqli_query($conn,$sql);
  
  
 
 }
     $page = $_SERVER['PHP_SELF'];
  echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
 }

 if(isset($_POST['del'])) {
  $q = $_POST['id'];
  $q1=$_POST['med'];
  $q2=$_POST['qty'];
  $q4=$_POST['price'];
  $q3=(int)$q2;
  $q5=(int)$q4;
  

  if($q != "") {
  
  if(!$conn)
  {
    die("Connection Failed: ".mysqli_connect_error());
  }
  $sql="delete from Medicine where MedicineID='$q'";
  $result=mysqli_query($conn,$sql);
  
  
 
 }
     $page = $_SERVER['PHP_SELF'];
  echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
 }

  if(isset($_POST['up'])) {
  $q = $_POST['id'];
  $q1=$_POST['med'];
  $q2=$_POST['qty'];
  $q4=$_POST['price'];
  $q3=(int)$q2;
  $q5=(int)$q4;
  

  if($q != "") {
  
  if(!$conn)
  {
    die("Connection Failed: ".mysqli_connect_error());
  }
  $sq = "UPDATE Medicine SET MedicineName='$q1',Quantity =$q3,Price=$q5  WHERE MedicineID='$q'";
  $result=mysqli_query($conn,$sq);
  
  $sq="select* from Medicine ";
  $res=mysqli_query($conn,$sq);
  
  
 }
  $page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
}

mysqli_close($conn);

?>
  </tbody>
</table>
<script>
  document.getElementById("up").addEventListener("click",function () {
  var timeoutID = window.setTimeout(function () {
      window.location.href= "update.php";
  }, 4000);
});
 
</script>


      
      
         <img  src="pharm.jpg" style="height:650px; width :1360px;">
      </div>

        
      </div>


<script>

var btn = document.getElementById("add")
document.getElementById("add").addEventListener("click",function () {
  var timeoutID = window.setTimeout(function () {
      window.location.href= "update.html";
  }, 1000);
});

document.getElementById("up").addEventListener("click",function () {
  var timeoutID = window.setTimeout(function () {
      window.location.href= "update.html";
  }, 1000);
});

</script>


</main>

  </div>   



</html>



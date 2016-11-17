 <?php
          $dbname="proj";
          $servername="localhost";
          $username="root";
          $password="pulz@sql";

         $conn=mysqli_connect($servername,$username,$password,$dbname);
          if(!$conn)
            die("Connection Failed: ".mysqli_connect_error());
          $cookiename=md5('d');
          if(isset($_COOKIE[$cookiename]))
          {
            $username=$_COOKIE['usernamedoc'];
            $query="select * from Patient where Username='$username'";
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
?>
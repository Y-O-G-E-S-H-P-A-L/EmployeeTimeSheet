    <?php
     $host = "localhost";
     $user = "root";
     $password = "";
     $database = "mydatabase";

     $con = mysqli_connect($host, $user, $password, $database);
     if (!$con) {
          echo "Database not Connected";
     }
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Employee Review Result</title>
</head>

<body>
     <?php
     require("connection.php");

     $editId = $_POST['editId'];
     $editName = $_POST['editName'];
     $editDesc = $_POST['editDesc'];
     $editStart = $_POST['editStart'];
     $editEnd = $_POST['editEnd'];
     $editRating = $_POST['editRating'];

     if ($editId != "" && $editName != "" && $editDesc != "" && $editStart != "" && $editEnd != "" && $editRating != "") {
          $sql = "INSERT INTO `employee` (`eid`, `ename`, `description`, `start-time`, `end-time`,`rating`) VALUES ('$editId','$editName','$editDesc','$editStart','$editEnd','$editRating')";
          $result = mysqli_query($con, $sql);
          $sql = "SELECT * FROM `employee`";
          $result = mysqli_query($con, $sql);
     ?>
          <table border="1">
               <tr>
                    <th colspan='6'>Employee Review Result</th>
               </tr>
               <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Rating</th>
               </tr>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
               echo "
               <tr>
               <td>" . $row['eid'] . "</td>
               <td>" . $row['ename'] . "</td>
               <td>" . $row['description'] . "</td>
               <td>" . $row['start-time'] . "</td>
               <td>" . $row['end-time'] . "</td>
               <td>" . $row['rating'] . "</td>
               </tr>";
          }
     } else {
          echo "<h3>Please Fill all the feilds..!</h3>";
     }
          ?>

          </table>
          <link rel="stylesheet" href="./style.css">
</body>

</html>
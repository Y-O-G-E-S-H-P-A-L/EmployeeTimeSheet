<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Review Sheet</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <?php
     $eid = $_POST['eid'];
     $ename  = $_POST['ename'];
     $desc = $_POST['desc'];
     $startTime = $_POST['startTime'];
     $endTime = $_POST['endTime'];
     ?>
     <div>
          <form action="/EmployeeTimeSheet/result.php" method="post">
               <h3>Review Sheet</h3>
               <?php echo "<input type='text' value='$eid' name='editId' /><br/>"; ?>
               <?php echo "<input type='text' value='$ename' name='editName' /><br/>"; ?>
               <?php echo "<input type='text' value='$desc' name='editDesc' /><br/>"; ?>
               <?php echo "<label>Start Time</label><input type='time' value='$startTime' name='editStart' /><br/>"; ?>
               <?php echo "<label>End Time</label><input type='time' value='$endTime' name='editEnd' /><br/>"; ?>
               <label>Rating</label>
               <input type="number" name="editRating" min="1" max="5" maxlength="1"><br />
               <input type="submit" name="submit" value="Submit" />
          </form>
     </div>
</body>

</html>
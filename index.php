<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Employee Time Sheet</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <div>
          <form action="/EmployeeTimeSheet/review.php" method="post">
               <h3>Employee Time Sheet</h3>
               <input type="number" name="eid" placeholder="ID" /><br />
               <input type="text" name="ename" placeholder="Name" /><br />
               <input type="text" name="desc" placeholder="Description" /><br />
               <label>Start Time</label>
               <input type="time" name="startTime" /><br />
               <label>End Time</label>
               <input type="time" name="endTime" /><br />
               <input type="submit" name="submit" value="Submit" />
          </form>
     </div>
</body>

</html>
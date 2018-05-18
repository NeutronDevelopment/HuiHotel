<?php include('connect.php'); ?>


<?php $query = ("select * from hotel");
$result1 = mysqli_query($db, $query);
?>

    <?php $query = ("select * from roomtype");
    $result2 = mysqli_query($db, $query);
    ?>

    <?php $query = ("select * from hotel");
    $result3 = mysqli_query($db, $query);
    ?>
  
    <?php $query = ("select * from roomtype");
    $result4 = mysqli_query($db, $query);
    ?>

    <?php $query = ("select * from job");
    $result2 = mysqli_query($db, $query);
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
</head>

<body style="background-color: #ededed; margin: 20px;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#367ed2; margin-bottom: 10px;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color:rgba(255,255,255,0.9);">Hui Portal</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" >
                <ul class="nav navbar-nav" >
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgba(255,255,255,0.9);">Tables </a>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" role="presentation" href="staff-table.php">Staff Table</a>
                      <a class="dropdown-item" role="presentation" href="booking-table.php">Booking Table</a>
                      <a class="dropdown-item" role="presentation" href="hotel-table.php">Hotel Table</a>
                      <a class="dropdown-item" role="presentation" href="user-table.php">User Table</a>
                      <a class="dropdown-item" role="presentation" href="type-table.php">Type Table</a>
                      <a class="dropdown-item" role="presentation" href="room-table.php">Room Table</a>
                      <a class="dropdown-item" role="presentation" href="job-table.php">Job Table</a>
                    </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="queries.php" style="color:rgba(255,255,255,0.9);">Queries</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="creation.php" style="color:rgba(255,255,255,0.9);">Creation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="delete.php" style="color:rgba(255,255,255,0.9);">Delete</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="between2dates.php" style="color:rgba(255,255,255,0.9);">Between 2 Dates</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div>

        <ul class="nav nav-tabs">
            <li class="nav-item"><a style="color: #424242;" class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Add Staff</a></li>
            <li class="nav-item"><a style="color: #424242;" class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Add Room</a></li>
            <li class="nav-item"><a style="color: #424242;" class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Add Hotel</a></li>
        </ul>
        <div class="tab-content">
          
  <div class="tab-pane active" role="tabpanel" id="tab-1">
  <div class="contact-clean">
    <form method="post" action="creation.php" style="width: 30%; margin-top: 25px; margin: 0 auto; ">
    <h2 class="text-center"> Add Staff </h2>

    <small id="roomins" class="form-text text-muted">Location:</small>
    <div class="input-group mb-3" style="width: 80%;">
    <select class="form-control" name="hotelID" required>
                <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
                <option value=<?php echo $row1[0];?>><?php echo $row1[2]; ?></option>
                <?php endwhile; ?>
                </select>
    </div>

    <small id="hotelins" class="form-text text-muted">Job Title:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
    <select class="form-control" name="jobID" required>

                <?php while($row1 = mysqli_fetch_array($result2)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>

                </select>
  </div>

  <small id="firstname" class="form-text text-muted">First Name:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
      <input type="text" class="form-control" name="stafffirstname" min="1" max="30" required>
  </div>

  <small id="lastname" class="form-text text-muted">Last Name:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;"> 
      <input type="text" class="form-control" name="stafflastname" min="1" max="30" required>
  </div>

  <small id="email" class="form-text text-muted">Email:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
      <input type="text" class="form-control" name="staffemail" min="8" max="50" required>
  </div>

  <small id="phone" class="form-text text-muted">Phone:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
      <input type="text" class="form-control" name="staffphone" min="1" max="11" required>
  </div>

  <small id="date" class="form-text text-muted">Date Hired:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
      <input class="form-control" type="date" name="datehired" required>

  </div>

  <button name="add_staff" type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
</form>
</div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">

  <div class="contact-clean">
                <form method="post" action="creation.php" style="width: 30%; margin-top: 25px; margin: 0 auto; ">

          <h2 class="text-center"> Add Room </h2>
    <small id="roomins" class="form-text text-muted">Location:</small>
    <div class="input-group mb-3" style="width: 80%;">
    <select class="form-control" name="hotelID" required>
                <?php while($row1 = mysqli_fetch_array($result3)):; ?>
                <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
                <option value=<?php echo $row1[0];?>><?php echo $row1[2]; ?></option>
                <?php endwhile; ?>

                </select>
    </div>

    <small id="hotelins" class="form-text text-muted">Room Type:</small>
  <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
    <select class="form-control" name="typeID" required>

                <?php while($row1 = mysqli_fetch_array($result4)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>

                </select>
  </div>
<button name="add_room" type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
</form>
</div>

</div>

<div class="tab-pane" role="tabpanel" id="tab-3">
<div class="contact-clean">
<form method="post" action="creation.php" style="width: 30%; margin-top: 25px; margin: 0 auto; ">

      <h2 class="text-center"> Add Hotel </h2>

      <small id="hotelnamesmall" class="form-text text-muted">Hotel Name:</small>
      <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
          <input type="text" class="form-control" name="hotelname" min="1" max="30" required>
      </div>

      <small id="hotellocationsmall" class="form-text text-muted">Location Name:</small>
      <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
          <input type="text" class="form-control" name="hotellocation" min="1" max="30" required>
      </div>

      <small id="hoteladdresssmall" class="form-text text-muted">Hotel Address:</small>
      <div class="input-group mb-3" style="margin-top: 15px; width: 80%;">
          <input type="text" class="form-control" name="hoteladdress" min="1" max="50" required>
      </div>


<button name="add_hotel" type="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
</form>
</div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
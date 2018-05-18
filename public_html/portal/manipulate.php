<!DOCTYPE html>
<html>

<?php include('connect.php'); ?>

  <?php $query = ("select * from roomtype");
$result6 = mysqli_query($db, $query);
?>

  <?php $query = ("select * from hotel");
$result3 = mysqli_query($db, $query);
?>

  <?php $query = ("select * from job");
$result4 = mysqli_query($db, $query);
?>

  <?php $query = ("select * from hotel");
$result5 = mysqli_query($db, $query);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
</head>

<body style="background-color: #ededed; margin: 20px;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#367ed2; margin-bottom: 20px;">
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
    <div class="contact-clean">
        <?php

            if(isset($_GET['booking'])){
                $query = ("SELECT * FROM booking WHERE bookingID =".$_GET['booking']);
                $result2 = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result2);
        ?>
          <form method="post">
             <h2 class="text-center">Edit Booking</h2>
            <?php /*?><div class="form-group">  <select class="form-control" name="OrganisationID"; style="margin-bottom: 20px;">
                <?php while($row1 = mysqli_fetch_array($result_organisation)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>
            </select></div><?php */?>
            <small id="hotelins" class="form-text text-muted">Room Type:</small>
            <input type="hidden" value="<?php echo $row['bookingID']?>" name="bookingID">
            <div class="input-group mb-3" style="width: 100%;">
            <select class="form-control" name="typeID" required>
            <?php while($row1 = mysqli_fetch_array($result6)):; ?>
            <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
            <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
            <?php endwhile; ?>
            </select>
            </div>

            <small id="hotelins" class="form-text text-muted">Hotel Location:</small>
            <div class="input-group mb-3" style="width: 100%;">
            <select class="form-control" name="hotelID" required>
            <?php while($row2 = mysqli_fetch_array($result3)):; ?>
            <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
            <option value=<?php echo $row2[0];?>><?php echo $row2[2]; ?></option>
            <?php endwhile; ?>
            </select>
            </div>

            <small id="hotelins" class="form-text text-muted">First Name:</small>
            <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="First Name" required value="<?php echo $row['firstname']?>"></div>
            <small id="hotelins" class="form-text text-muted">Last Name:</small>
            <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Last Name" required value="<?php echo $row['lastname']?>"></div>
            <small id="hotelins" class="form-text text-muted">Number Of Rooms:</small>
            <div class="form-group"><input class="form-control" type="Number" min="1" max="5" name="guests" placeholder="Number Of Guests" required value="<?php echo $row['guests']?>"></div>
            <small id="hotelins" class="form-text text-muted">Number Of Rooms:</small>
            <div class="form-group"><input class="form-control" type="Number" min="1" max="5" name="rooms" placeholder="Number Of Rooms" required value="<?php echo $row['rooms']?>"></div>
            <small id="hotelins" class="form-text text-muted">Check-In Date:</small>
            <div class="form-group"><input class="form-control" type="date" name="checkin" placeholder="Check-In" required value="<?php echo $row['checkin']?>"></div>
            <small id="hotelins" class="form-text text-muted">Check-Out Date:</small>
            <div class="form-group"><input class="form-control" type="date" name="checkout" placeholder="Check-Out" required value="<?php echo $row['checkout']?>"></div>
           <div class="form-group"><button name="edit_booking" class="btn btn-primary" type="submit">Edit</button></div>
        </form>
                <?php
            }

            if(isset($_GET['staff'])){
                $query = ("SELECT * FROM staff WHERE staffID =".$_GET['staff']);
                $result1 = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result1);
        ?>
          <form method="post">
             <h2 class="text-center">Edit Staff</h2>
            <?php /*?><div class="form-group">  <select class="form-control" name="OrganisationID"; style="margin-bottom: 20px;">
                <?php while($row1 = mysqli_fetch_array($result_organisation)):; ?>
                <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                <?php endwhile; ?>
            </select></div><?php */?>

            <input type="hidden" value="<?php echo $row['staffID']?>" name="staffID">

            <small id="hotelins" class="form-text text-muted">Hotel Location:</small>
            <div class="input-group mb-3" style="width: 100%;">
            <select class="form-control" name="hotelID" required>
            <?php while($row2 = mysqli_fetch_array($result5)):; ?>
            <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
            <option value=<?php echo $row2[0];?>><?php echo $row2[2]; ?></option>
            <?php endwhile; ?>
            </select>
            </div>


            <small id="hotelins" class="form-text text-muted">Job Title:</small>
            <div class="input-group mb-3" style="width: 100%;">
            <select class="form-control" name="jobID" required>
            <?php while($row1 = mysqli_fetch_array($result4)):; ?>
            <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
            <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
            <?php endwhile; ?>
            </select>
            </div>

            <small id="hotelins" class="form-text text-muted">First Name:</small>
            <div class="form-group"><input class="form-control" type="text" name="stafffirstname" placeholder="First Name" required value="<?php echo $row['stafffirstname']?>"></div>
            <small id="hotelins" class="form-text text-muted">Last Name:</small>
            <div class="form-group"><input class="form-control" type="text" name="stafflastname" placeholder="Last Name" required value="<?php echo $row['stafflastname']?>"></div>
            <small id="hotelins" class="form-text text-muted">Email:</small>
            <div class="form-group"><input class="form-control" type="text" min="1" max="5" name="staffemail" placeholder="Email" required value="<?php echo $row['staffemail']?>"></div>
            <small id="hotelins" class="form-text text-muted">Phone:</small>
            <div class="form-group"><input class="form-control" type="Number" name="staffphone" placeholder="Phone" required value="<?php echo $row['staffphone']?>"></div>
            <small id="hotelins" class="form-text text-muted">Date Hired:</small>
            <div class="form-group"><input class="form-control" type="date" name="datehired" placeholder="Date Hired" required value="<?php echo $row['datehired']?>"></div>
           <div class="form-group"><button name="edit_staff" class="btn btn-primary" type="submit">Edit</button></div>
        </form>
        <?php 
        } 
        ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>
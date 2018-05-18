    <?php include('connect.php') ?>

<?php $query = ("SELECT a.hotelname, COUNT(b.hotelID) AS count FROM hotel as a, booking as b WHERE a.hotelID = b.hotelID AND b.hotelID = '4'");
    $result1 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.hotelname, COUNT(b.hotelID) AS count FROM hotel as a, booking as b WHERE a.hotelID = b.hotelID AND b.hotelID = '5'");
    $result2 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.hotelname, COUNT(b.hotelID) AS count FROM hotel as a, booking as b WHERE a.hotelID = b.hotelID AND b.hotelID = '6'");
    $result3 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.hotelname, COUNT(b.hotelID) AS count FROM hotel as a, booking as b WHERE a.hotelID = b.hotelID AND b.hotelID = '7'");
    $result4 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.roomtype, count(b.typeid) as count FROM roomtype as a, booking as b WHERE a.typeID = b.typeID AND b.typeID = '1'");
    $result5 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.roomtype, count(b.typeid) as count FROM roomtype as a, booking as b WHERE a.typeID = b.typeID AND b.typeID = '2'");
    $result6 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.roomtype, count(b.typeid) as count FROM roomtype as a, booking as b WHERE a.typeID = b.typeID AND b.typeID = '3'");
    $result7 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.roomtype, count(b.typeid) as count FROM roomtype as a, booking as b WHERE a.typeID = b.typeID AND b.typeID = '4'");
    $result8 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.jobname, count(b.jobid) as count FROM job as a, staff as b WHERE a.jobID = b.jobID and b.jobID = '1'");
    $result9 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.jobname, count(b.jobid) as count FROM job as a, staff as b WHERE a.jobID = b.jobID and b.jobID = '2'");
    $result10 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.jobname, count(b.jobid) as count FROM job as a, staff as b WHERE a.jobID = b.jobID and b.jobID = '3'");
    $result11 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.jobname, count(b.jobid) as count FROM job as a, staff as b WHERE a.jobID = b.jobID and b.jobID = '4'");
    $result12 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.jobname, count(b.jobid) as count FROM job as a, staff as b WHERE a.jobID = b.jobID and b.jobID = '5'");
    $result13 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("SELECT a.jobname, count(b.jobid) as count FROM job as a, staff as b WHERE a.jobID = b.jobID and b.jobID = '6'");
    $result14 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<!DOCTYPE html>
<html>
    <style type="text/css">
        p {font-size: 20px; text-align: left; margin-left: 100px;}
    </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queries</title>
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
            <li class="nav-item"><a style="color: #424242;" class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Number Of Bookings Per Hotel</a></li>
            <li class="nav-item"><a style="color: #424242;" class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Number Of Bookings Per Room Type</a></li>
            <li class="nav-item"><a style="color: #424242;" class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Number Of Bookings</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="contact-clean">
                <form>
                <br>
                <center>
                <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
                <p style="text-decoration: underline;"> <?php echo $row1['hotelname'] ;  ?> </p>
                <p> <?php echo $row1['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row2 = mysqli_fetch_array($result2)):; ?>
                <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
                <p style="text-decoration: underline;"> <?php echo $row2['hotelname'] ;  ?> </p>
                <p> <?php echo $row2['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row3 = mysqli_fetch_array($result3)):; ?>
                <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
                <p style="text-decoration: underline;"> <?php echo $row3['hotelname'] ;  ?> </p>
                <p> <?php echo $row3['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row4 = mysqli_fetch_array($result4)):; ?>
                <!-- This shows information from one collums but manipulates a diffrent collumn in the same table. -->
                <p style="text-decoration: underline;"> <?php echo $row4['hotelname'] ;  ?> </p>
                <p> <?php echo $row4['count'] ;  ?> </p>
                <?php endwhile; ?>
                </center>

            </form>
        </div>
            </div>

            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="contact-clean">
                <form>
                <br>
                <center>
                <?php while($row5 = mysqli_fetch_array($result5)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row5['roomtype'] ;  ?> </p>
                <p> <?php echo $row5['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row6 = mysqli_fetch_array($result6)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row6['roomtype'] ;  ?> </p>
                <p> <?php echo $row6['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row7 = mysqli_fetch_array($result7)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row7['roomtype'] ;  ?> </p>
                <p> <?php echo $row7['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row8 = mysqli_fetch_array($result8)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row8['roomtype'] ;  ?> </p>
                <p> <?php echo $row8['count'] ;  ?> </p>
                <?php endwhile; ?>
                </center>
            </form>
        </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-3">
                <div class="contact-clean">
                <form>
                <br>
                <center>
                <?php while($row9 = mysqli_fetch_array($result9)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row9['jobname'] ;  ?> </p>
                <p> <?php echo $row9['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row10 = mysqli_fetch_array($result10)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row10['jobname'] ;  ?> </p>
                <p> <?php echo $row10['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row11 = mysqli_fetch_array($result11)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row11['jobname'] ;  ?> </p>
                <p> <?php echo $row11['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row12 = mysqli_fetch_array($result12)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row12['jobname'] ;  ?> </p>
                <p> <?php echo $row12['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row13 = mysqli_fetch_array($result13)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row13['jobname'] ;  ?> </p>
                <p> <?php echo $row13['count'] ;  ?> </p>
                <?php endwhile; ?>

                <?php while($row14 = mysqli_fetch_array($result14)):; ?>
                <p style="text-decoration: underline;"> <?php echo $row14['jobname'] ;  ?> </p>
                <p> <?php echo $row14['count'] ;  ?> </p>
                <?php endwhile; ?>
                </center>
            </form>
        </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
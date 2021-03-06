<?php include('connect.php'); ?>

  
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>between2dates</title>
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
                
    </nav>
    <br>
    <center>
        <div class="contact-clean">

            <form style="font-size: 20px; text-align: left; font-family: arial;">
            	<h2> Booking </h2>
                <?php while($row16 = mysqli_fetch_array($result18)):; ?>
                <p>  Booking ID - <?php echo $row16['bookingID']; ?> </p>
                <p>  Type ID - <?php echo $row16['roomtype']; ?> </p>
                <p>  hotel ID - <?php echo $row16['hotelname']; ?> </p>
                <p>  First Name - <?php echo $row16['firstname']; ?> </p>
                <p>  Last Name - <?php echo $row16['lastname']; ?> </p>
                <p>  Guests - <?php echo $row16['guests']; ?> </p>
                <p>  Rooms - <?php echo $row16['rooms']; ?> </p>
                <p>  Check In - <?php echo $row16['checkin']; ?> </p>
                <p>  Check Out - <?php echo $row16['checkout']; ?> </p>
                <?php endwhile; ?>

                <button class="btn btn-primary" style="color: #ffffff;"> <a class="nav-link" href="between2dates.php"> Go back</button>
            </form>
        </div>
    </center>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
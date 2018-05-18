<?php include('connect.php') ?>


<?php $query = ("select * from hotel");
    $result1 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<?php $query = ("select * from roomtype");
    $result2 = mysqli_query($db, $query);
    if (!$query) {
        die(error);
    }
     ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htdocs</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-e-commerce.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-image: url(assets/img/beach-booking.jpg);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">HUI Hotel</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="locations.php">Locations</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="booking.php">Booking</a></li>
                </ul><span class="navbar-text actions"> <a href="login.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="register.php">Sign Up</a></span></div>
        </div>
    </nav>
    <div class="contact-clean">
        <form action="booking.php" method="post">
            <h2 class="text-center">Book Now</h2>

            <label>First name</label>

            <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="First Name"></div>

            <label>Last name</label>

            <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Last Name"></div>

            <label>Location</label>

            <div class="form-group">
                <select name="hotelID" class="form-control">
                    <optgroup>
                        <option selected=""></option>
                                        <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                                        <option value=<?php echo $row1[0];?>><?php echo $row1[2]; ?></option>
                                        <?php endwhile; ?>
                    </optgroup>
                </select>
            </div>

            <label>Room type</label>

            <div class="form-group">
                <select name="typeID" class="form-control">
                    <optgroup>
                        <option selected=""></option>
                                        <?php while($row1 = mysqli_fetch_array($result2)):; ?>
                                        <option value=<?php echo $row1[0];?>><?php echo $row1[1]; ?></option>
                                        <?php endwhile; ?>
                    </optgroup>
                </select>
            </div>

        <label>Number of rooms</label>

        <div class="form-group"><input name="rooms"  class="form-control" type="number"></div>

        <label>Number of guests</label>

        <div class="form-group"><input name="guests" class="form-control" type="number"></div>

        <label>Check in date</label>

        <div class="form-group"><input name="checkin"class="form-control" type="date"></div>

        <label>Check out date</label>

        <div class="form-group"><input name="checkout" class="form-control" type="date"></div>
<!-- 
        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1">

        <label class="form-check-label" for="formCheck-1">Agree to the terms and conditions</label>

        </div><a href="#">Terms and Conditions</a> -->

        <div class="form-group"><button name="book_user" class="btn btn-primary" type="submit">send </button></div>

        </form>
        </div>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Home&nbsp;</a></li>
                                <li><a href="#">Locations</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>HUI Hotel's</h3>
                            <p>All content is copyrighted by HUI hotels</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">HUI Hotel's © 2018</p>
                </div>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
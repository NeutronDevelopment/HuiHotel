<?php include('connect.php'); ?>

        <?php $query = ("select * from booking where bookingID = '28'");
        $result2 = mysqli_query($db, $query);
        ?>
        


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="tab-pane" role="tabpanel" id="tab-2">

                <table id="booking" class="table table-striped table-bordered">
                          <thead>
                               <tr>
                                    <td>Booking ID</td>
                                    <td>Room Type</td>
                                    <td>Location</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Guests</td>
                                    <td>Rooms</td>
                                    <td>checkin</td>
                                    <td>checkout</td>
                               </tr>
                          </thead>

<?php

while ($row = mysqli_fetch_assoc($result2))
{ echo '
                               <tr>
                                    <td>'.$row["bookingID"].'</td>
                                    <td>'.$row["typeID"].'</td>
                                    <td>'.$row["hotelID"].'</td>
                                    <td>'.$row["firstname"].'</td>
                                    <td>'.$row["lastname"].'</td>
                                    <td>'.$row["guests"].'</td>
                                    <td>'.$row["rooms"].'</td>
                                    <td>'.$row["checkin"].'</td>
                                    <td>'.$row["checkout"].'</td>
                               </tr>
                               ';
                          }?>
                     </table>

            </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>

</body>

</html>
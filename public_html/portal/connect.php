<?php
session_start();

// variable declaration
$date1 = "";
$date2 = "";
$tempbooking = "";

// ID Variables
$hotelID = "";
$userID = "";
$typeID = "";
$roomID = "";
$jobID = "";

// Account Variables
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// Hotel variables
$hotelname = "";
$hotellocation = "";
$hoteladdress = "";

// Staff variables
$staffID = "";
$stafffirstname = "";
$stafflastname = "";
$staffphone = "";
$staffemail = "";
$datehired = "";

// Booking Variables
$bookingID = "";
$firstname = "";
$lastname = "";
$guests = "";
$rooms = "";
$roomselect = "";
$checkin =  "";
$checkout = "";

// connect to database
// $db = mysqli_connect('localhost', 'id5045805_huihotel_un', 'qwerty123', 'id5045805_huihotel_db');

$db = mysqli_connect('localhost', 'id5045805_huihotel_un', 'qwerty123', 'id5045805_huihotel_db');

//Between two dates

// Edit from table

if (isset($_POST['edit_booking'])) {
   
	$bookingID = mysqli_real_escape_string($db, $_POST['bookingID']);
	$typeID = mysqli_real_escape_string($db, $_POST['typeID']);
	$hotelID = mysqli_real_escape_string($db, $_POST['hotelID']);
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$guests = mysqli_real_escape_string($db, $_POST['guests']);
	$rooms = mysqli_real_escape_string($db, $_POST['rooms']);
	$checkin = mysqli_real_escape_string($db, $_POST['checkin']);
	$checkout = mysqli_real_escape_string($db, $_POST['checkout']);
	
$query = "UPDATE booking SET
typeID = '".$typeID."', hotelID = '".$hotelID."', firstname = '".$firstname."', lastname = '".$lastname."', guests = '".$guests."', rooms = '".$rooms."', checkin = '".$checkin."', checkout = '".$checkout."' WHERE bookingID = ".$bookingID." ";

    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Booking Changed';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

		if (isset($_POST['edit_staff'])) {
   
	$staffID = mysqli_real_escape_string($db, $_POST['staffID']);
	$hotelID = mysqli_real_escape_string($db, $_POST['hotelID']);
	$jobID = mysqli_real_escape_string($db, $_POST['jobID']);
	$stafffirstname = mysqli_real_escape_string($db, $_POST['stafffirstname']);
	$stafflastname = mysqli_real_escape_string($db, $_POST['stafflastname']);
	$staffphone = mysqli_real_escape_string($db, $_POST['staffphone']);
	$staffemail = mysqli_real_escape_string($db, $_POST['staffemail']);
	$datehired = mysqli_real_escape_string($db, $_POST['datehired']);
	
$query = "UPDATE staff SET
hotelID = '".$hotelID."', jobID = '".$jobID."', stafffirstname = '".$stafffirstname."', stafflastname = '".$stafflastname."', staffphone = '".$staffphone."', staffemail = '".$staffemail."', datehired = '".$datehired."', WHERE staffID = ".$staffID." ";

    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Staff Changed';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

//Delete from table

if (isset($_GET['remove_staff'])) {
	
$query = "DELETE FROM staff
WHERE staffID = '".$_GET['remove_staff']."'";   
$return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_booking'])) {

$query = "DELETE FROM booking
WHERE bookingID = '".$_GET['remove_booking']."'";   
   	$return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_hotel'])) {
	
$query = "DELETE FROM hotel
WHERE hotelID = '".$_GET['remove_hotel']."'";

	    
    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_user'])) {
		
$query = "DELETE FROM users
WHERE userID = '".$_GET['remove_user']."'";
    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_type'])) {
	
//echo 'here';exit;
	
	/*$OrganisationID = mysqli_real_escape_string($db, $_POST['OrganisationID']);
	if ($OrganisationID== ""){
		array_push($errors, "Organisation Name field is empty ");
	}*/

	
$query = "DELETE FROM type
WHERE typeID = '".$_GET['remove_type']."'";
    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_room'])) {
	
//echo 'here';exit;
	
	/*$OrganisationID = mysqli_real_escape_string($db, $_POST['OrganisationID']);
	if ($OrganisationID== ""){
		array_push($errors, "Organisation Name field is empty ");
	}*/

	
$query = "DELETE FROM rooms
WHERE roomID = '".$_GET['remove_room']."'";	 
    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_GET['remove_job'])) {

$query = "DELETE FROM job
WHERE jobID = '".$_GET['remove_job']."'";
    $return = mysqli_query($db, $query);  
				if($return){

					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

//Creation Page

if (isset($_POST['add_room'])) {
	$hotelID = mysqli_real_escape_string($db, $_POST['hotelID']);
	$typeID = mysqli_real_escape_string($db, $_POST['typeID']);
	if (empty($hotelID)) { array_push($errors, "Error"); }
	if (empty($typeID)) { array_push($errors, "Error"); }
	if (count($errors) == 0) {
		$query = "INSERT INTO rooms ( hotelID, typeID)
		VALUES('$hotelID', '$typeID')";
		mysqli_query($db, $query);
	}
}

if (isset($_POST['add_hotel'])) {
	$hotelname = mysqli_real_escape_string($db, $_POST['hotelname']);
	$hotellocation = mysqli_real_escape_string($db, $_POST['hotellocation']);
	$hoteladdress = mysqli_real_escape_string($db, $_POST['hoteladdress']);
	if (empty($hotelname)) { array_push($errors, "Error"); }
	if (empty($hotellocation)) { array_push($errors, "Error"); }
	if (empty($hoteladdress)) { array_push($errors, "Error"); }
	if (count($errors) == 0) {
		$query = "INSERT INTO hotel (hotelname, hotellocation, hoteladdress)
		VALUES('$hotelname', '$hotellocation', '$hoteladdress')";
		mysqli_query($db, $query);
	}
}

//Add Staff

if (isset($_POST['add_staff'])) {
	$hotelID = mysqli_real_escape_string($db, $_POST['hotelID']);
	$jobID = mysqli_real_escape_string($db, $_POST['jobID']);
	$stafffirstname = mysqli_real_escape_string($db, $_POST['stafffirstname']);
	$stafflastname = mysqli_real_escape_string($db, $_POST['stafflastname']);
	$staffemail = mysqli_real_escape_string($db, $_POST['staffemail']);
	$staffphone = mysqli_real_escape_string($db, $_POST['staffphone']);
	$datehired = mysqli_real_escape_string($db, $_POST['datehired']);
	if (empty($hotelID)) { array_push($errors, "Error"); }
	if (empty($jobID)) { array_push($errors, "Error"); }
	if (empty($stafffirstname)) { array_push($errors, "Error"); }
	if (empty($stafflastname)) { array_push($errors, "Error"); }
	if (empty($staffemail)) { array_push($errors, "Error"); }
	if (empty($staffphone)) { array_push($errors, "Error"); }
	if (empty($datehired)) { array_push($errors, "Error"); }
	if (count($errors) == 0) {
		$query = "INSERT INTO staff (hotelID, jobID, stafffirstname, stafflastname, staffemail, staffphone, datehired)
		VALUES('$hotelID', '$jobID', '$stafffirstname', '$stafflastname', '$staffemail', '$staffphone', '$datehired')";
		mysqli_query($db, $query);
	}
}


//BOOK ROOM

if (isset($_POST['book_user'])) {
	// receive all input values from the form

	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$hotelID = mysqli_real_escape_string($db, $_POST['hotelID']);
	$typeID = mysqli_real_escape_string($db, $_POST['typeID']);
    $guests = mysqli_real_escape_string($db, $_POST['guests']);
    $rooms = mysqli_real_escape_string($db, $_POST['rooms']);
    $checkin = mysqli_real_escape_string($db, $_POST['checkin']);
    $checkout = mysqli_real_escape_string($db, $_POST['checkout']);



	// form validation: ensure that the form is correctly filled
	if (empty($firstname)) { array_push($errors, "First name is required"); }
	if (empty($lastname)) { array_push($errors, "Last name is required"); }
	if (empty($hotelID)) { array_push($errors, "Location is required"); }
	if (empty($typeID)) { array_push($errors, "Room selection is required"); }
	if (empty($guests)) { array_push($errors, "Number of guests is required"); }
	if (empty($rooms)) { array_push($errors, "Number of rooms is required"); }
	if (empty($checkin)) { array_push($errors, "Check-In is required"); }
	if (empty($checkout)) { array_push($errors, "Check-Out date is required"); }



	// Insert information into booking

	if (count($errors) == 0) {
		$query = "INSERT INTO booking (hotelID, typeID, firstname, lastname, guests, rooms, checkin, checkout)
		VALUES('$hotelID', '$typeID', '$firstname', '$lastname', '$guests', '$rooms', '$checkin','$checkout')";
		mysqli_query($db, $query);
		$_SESSION['success'] = "";
		header('location: index.php');
	}
}

// Deletion

if (isset($_POST['remove_booking'])) {
	
	$bookingID = mysqli_real_escape_string($db, $_POST['bookingID']);
	if ($bookingID== ""){
		array_push($errors, "Organisation Name field is empty ");
	}
		$query = "DELETE FROM booking
        WHERE bookingID = '".$bookingID."'";
	    
    $return = mysqli_query($db, $query); 
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

if (isset($_POST['remove_staff'])) {
	$staffID = mysqli_real_escape_string($db, $_POST['staffID']);
	if ($staffID== ""){
		array_push($errors, "Organisation Name field is empty ");
	}
		$query = "DELETE FROM staff
        WHERE staffID = '".$staffID."'";

    $return = mysqli_query($db, $query);  
				if($return){
					echo 'Deleted!';
				}else{
					echo 'Something went wrong. Please try again'; 
				}		
		}

//between two dates

  if (isset($_POST['betweendate'])) {
  $date1 = mysqli_real_escape_string($db, $_POST['date1']);
  $date2 = mysqli_real_escape_string($db, $_POST['date2']);
  $query = "SELECT * FROM booking WHERE checkin BETWEEN '".$date1."' AND '".$date2."'";
  $result15 = mysqli_query($db, $query);
}

// BOOKING END
// Choose a booking
     
  if (isset($_POST['betweendate'])) {
  $date1 = mysqli_real_escape_string($db, $_POST['date1']);
  $date2 = mysqli_real_escape_string($db, $_POST['date2']);
  $query = "SELECT * FROM booking WHERE checkin BETWEEN '".$date1."' AND '".$date2."'";
  $result17 = mysqli_query($db, $query);
}

// View Booking
if (isset($_POST['view_booking'])) {
	$bookingID = mysqli_real_escape_string($db, $_POST['bookingID']);
	// $query = "SELECT * FROM booking WHERE bookingID = '".$bookingID."'";
	$query = "SELECT a.*, b.*, c.* FROM booking a, roomtype b, hotel c WHERE a.typeID = b.typeID and a.hotelID = c.hotelID AND bookingID = '".$bookingID."'";
    $result18 = mysqli_query($db, $query);
}


// REGISTER USER

if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled

	if (empty($email)) { array_push($errors, "Email is required"); }

	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 !== $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = ($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (email, password)
				  VALUES('$email', '$password')";
		mysqli_query($db, $query);
		$_SESSION['success'] = "";
		header('location: index.php');
	}
}

if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if (empty($email)) {
		array_push($errors, "Email is required");
	}

	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = ($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['success'] = "";
			header('location: index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>
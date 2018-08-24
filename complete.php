
<?php
session_start();
?>
<!DOCTYPE html>
<?php
define('DB_USER', 'chearn4');
   define('DB_PSWD', 'chearn4');
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'chearn4');
   $flight = $_SESSION['flight'];
   $num_id = $_SESSION['num_id'];
   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $gid = $_POST['gid'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $planet = $_POST['planet'];
   $creditCard =  $_POST['creditCard'];
   $expDate = $_POST['expDate'];
   $securityCode = $_POST['securityCode'];
   $db = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
	
	$sql = "INSERT INTO flight".$flight." (id, firstName, lastName, gid, address, city, state, country, planet, email, creditCard, expDate, securityCode) VALUES ('$num_id','$firstName','$lastName','$gid','$email','$address','$city','$state','$country','$planet','$creditCard','$expDate','$securityCode')";
	if (mysqli_query($db, $sql)) {
      
} else {
      
}
?>
<html>

<head>
  <title>Complete</title>
</head>
<body class = "parallax2">
<form  action="index.html">
<div>
<link rel = "stylesheet" href = "flights_style.css">

<h1 class = "quote" >Reservation Complete</h1>
<h3 class = "quote" >Thank you for your reservation! You'll recieve and email shortly with reciept and information regarding your flight.</h3>
 <input style = "margin-left:auto;margin-right:auto;"name = "submit" class = "button2" id="submit" type="submit" value="Return Home" />
</div>
</form>
</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>

<?php
 $_SESSION['flight'] = $_GET['flight'];
 $flight =  $_SESSION['flight'];
$_SESSION["num_id"]=$_GET["num_id"];
$_SESSION["class"]=$_GET["class"];
$_SESSION["cost"]=$_GET["cost"];
$_SESSION["dest"]=$_GET["dest"];
$dest = $_SESSION['dest'];
$id = $_SESSION['num_id'];
$class = $_SESSION['class'];
$cost = $_SESSION['cost'];


    
 ?>

?>
<html>
<head>
<title>Booking</title>
<link rel = "icon" type = "image/png" href = "Assets/Photos/favicon.png">
</head>
<body class = "background">
<link rel = "stylesheet" href = "flights_style.css">
<div>
	<ul class = "navbar">
		<li class = "list"><a href = "index.html" class = "block" >Home</a></li>
		<li class = "list"><a href = "magellan_spec.html" class = "block" >Magellan</a></li>
		<li class = "list"><a href = "destinations.html" class = "block" >Destinations</a></li>
	</ul>
</div>

<div class = "grid">

	<img class = "logo" src = "Assets/Photos/voyager_logo.png" alt = "Voyager Space Industries"></img>
	<p class = "quote">Reservation Form</p>
</div>

<div>
	<div class = "parallax2">
		<form action="complete.php" method="post">
		<div class = "form_box"><p class = "header">Please fill in all of the fields for booking. Double check your flight to confirm it is correct
		before submitting.</p>
		<br>
		<p>Destination: <?php echo " ".$dest;?></p>
		<p><?php echo $class;?> Cabin Number: <?php echo " ".$id;?></p>
		<p>Price: <?php echo " ".$cost;?>CR</p>
		
		
		<br>
        First name:<br>
        <input class = "text" id = "first" type="text" name="firstName" style = "width:500px"><br>
        <label id = "first_error" class = "mandatory">  </label><br>
		
        Last name:<br>
        <input class = "text" id = "last" type="text" name="lastName" style = "width:500px">
		<label class = "text" id = "last_error" class = "mandatory">  </label><br>
        <br>
		
		12 Digit Galactic ID (GID):<br>
        <input class = "text" id = "gid" type = "text" name = "gid" style = "width:150px" maxlength = "12"><br>
		<label id = "ID_error" class = "mandatory"></label><br>
        
		Address:<br>
        <input class = "text" id = "address" type="text" name="address" style = "width:500px">
        <label id = "address_error" class = "mandatory"></label><br>
		<br>
		
		City:<br>
        <input class = "text" id = "city" type="text" name="city" style = "width:500px">
        <label id = "city_error" class = "mandatory"></label><br>
		<br>
		
		State:<br>
        <input class = "text" id = "state" type="text" name="state" style = "width:500px">
        <label id = "state_error" class = "mandatory"></label><br>
		<br>
		
		Country:<br>
        <input class = "text" id = "country" type="text" name="country" style = "width:500px">
        <label id = "country_error" class = "mandatory"></label><br>
		<br>
		
		Planet:<br>
        <input class = "text" id = "planet" type="text" name="planet" style = "width:500px">
        <label id = "planet_error" class = "mandatory"></label><br>
		<br>
		
		Email:<br>
        <input class = "text" id = "email" type="text" name="email" style = "width:500px">
        <label id = "email_error" class = "mandatory"></label><br>
		<br>
		
		Credit Account Number:
        <input id = "cc" class = "creditCardText" type="text" name="creditCard" onChange="SetTypeText(this.value)" style = "width:150px" maxlength="19">
		<label id = "cc_error" class = "mandatory"></label>
		<p id="cardType" style = "color:#07ed00"></p>
		Expiration:
        <input  id = "exp" type="text" name="expDate" style = "width:50px" class = "month" maxlength="5">
		<label id = "exp_error" class = "mandatory"></label>
		Security Code:
        <input class = "text" id = "securityCode" type="password" name="securityCode" style = "width:50px" maxlength="3">
		<label id = "sec_error" class = "mandatory"></label><br>
		<br>
		
        <input name = "submit" class = "button2" id="submit" type="submit" value="Complete Reservation" />
	</form>
		</div>
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		function SetTypeText(number)
	{
		var typeField = document.getElementById("cardType");
		typeField.innerHTML = GetCardType(number);
	}

        function GetCardType(number)
        {            
            var re = new RegExp("^4");
            if (number.match(re) != null)
                return "Visa";
 
            re = new RegExp("^(34|37)");
            if (number.match(re) != null)
                return "American Express";
 
            re = new RegExp("^5[1-5]");
            if (number.match(re) != null){
                return "MasterCard";
			}
            re = new RegExp("^6011");
            if (number.match(re) != null)
                return "Discover";
 
            return "";
        }
		
		$('.creditCardText').keyup(function() {
		var foo = $(this).val().split("-").join(""); 
		if (foo.length > 0) {
			foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
		}
		$(this).val(foo);
		});

		$('.month').keyup(function() {
		var foo = $(this).val().split("/").join(""); 
		if (foo.length > 0) {
			foo = foo.match(new RegExp('.{1,2}', 'g')).join("/");
		}
		$(this).val(foo);
		});
	</script>
	

</body>
</html>
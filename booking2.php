<?php
session_start();
?>
<!DOCTYPE html>

<?php
   define('DB_USER', 'chearn4');
   define('DB_PSWD', 'chearn4');
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'chearn4');
    $_POST['flight'] = $_SESSION['flight'];
   $db = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
   
   if(!$db){
	   die('error connecting to database');
   }
    echo 'connection successful';
	
	
	$query = "SELECT id FROM flight2";
	$result = mysqli_query($db, $query);
	$num = array();

    while($row = mysqli_fetch_assoc($result)){
        $num[] = $row["id"];
    }


?>

<html>
<head>
<title>Select Flight</title>
</head>
<body class = "background">
<link rel = "stylesheet" href = "booking.css">
<div>
	<ul class = "navbar">
		<li class = "list"><a href = "index.html" class = "block" >Home</a></li>
		<li class = "list"><a href = "magellan_spec.html" class = "block" >Magellan</a></li>
		<li class = "list"><a href = "destinations.html" class = "block" >Destinations</a></li>
		<li class = "list"><a href = "available_flights.html" class = "block" >Book Now</a></li>
	</ul>
</div>

<div class = "grid">
	<img class = "logo" src = "Assets/Photos/voyager_logo.png" alt = "Voyager Space Industries">
	
	<p class = "quote2">Barnard's Star</p>
</div>

<div>
	<div >
		<p id = "test" class = "textbox">Barnard's Star is a very-low-mass red dwarf about 6 light-years away from 
		Earth in the constellation of Ophiuchus. It is the fourth-nearest-known individual star to the Sun.Barnard's 
		Star is among the most studied red dwarfs because of its proximity and favorable location for observation near the celestial equator. 
		Although Barnard's Star is an ancient star, it still experiences star flare events.</p>
		
	</div>
</div>

<div class = "container">
	<div>
		<div class = "left">
			<p class = "text"> Economy Class</p>
		</div>
		<div class = "left_luxury">
			<p class = "text"> Luxury Class</p>
		</div>
	</div>	
	<div class = "cabin_space" id = "cabin">

	<form action="form.php" method="post">
	</form>
	<input type = "hidden" name = "flight" value = "2">
	<div>
		<div><a href = "form.php?num_id=1&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="1" id="1" name="num_id" >1</a></div>
		<div><a href = "form.php?num_id=2&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="2" id="2" name="num_id">2</a></div>
		<div><a href = "form.php?num_id=3&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="3" id="3" name="num_id">3</a></div>
		<div><a href = "form.php?num_id=4&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="4" id="4" name="num_id">4</a></div>
		<div><a href = "form.php?num_id=5&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="5" id="5" name="num_id">5</a></div>
		<div><a href = "form.php?num_id=6&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="6" id="6" name="num_id">6</a></div>
		<div><a href = "form.php?num_id=7&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="7" id="7" name="num_id">7</a></div>
		<div><a href = "form.php?num_id=8&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="8" id="8" name="num_id">8</a></div>
		<div><a href = "form.php?num_id=9&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="9" id="9" name="num_id">9</a></div>
		<div><a href = "form.php?num_id=10&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="10" id="10" name="num_id">10</a></div>
		<div><a href = "form.php?num_id=11&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="11" id="11" name="num_id">11</a></div>
		<div><a href = "form.php?num_id=12&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="12" id="12" name="num_id">12</a></div>
		<div><a href = "form.php?num_id=13&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="13" id="13" name="num_id">13</a></div>
		<div><a href = "form.php?num_id=14&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="14" id="14" name="num_id">14</a></div>
		<div><a href = "form.php?num_id=15&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="15" id="15" name="num_id">15</a></div>
		<div><a href = "form.php?num_id=16&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="16" id="16" name="num_id">16</a></div>
		<div><a href = "form.php?num_id=17&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="17" id="17" name="num_id">17</a></div>
		<div><a href = "form.php?num_id=18&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="18" id="18" name="num_id">18</a></div>
		<div><a href = "form.php?num_id=19&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="19" id="19" name="num_id">19</a></div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div>
		<div><a href = "form.php?num_id=20&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="20" id="20" name="num_id">20</a></div>
		<div><a href = "form.php?num_id=21&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="21" id="21" name="num_id">21</a></div>
		<div><a href = "form.php?num_id=22&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="22" id="22" name="num_id">22</a></div>
		<div><a href = "form.php?num_id=23&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="23" id="23" name="num_id">23</a></div>
		<div><a href = "form.php?num_id=24&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="24" id="24" name="num_id">24</a></div>
		<div><a href = "form.php?num_id=25&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="25" id="25" name="num_id">25</a></div>
		<div><a href = "form.php?num_id=26&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="26" id="26" name="num_id">26</a></div>
		<div><a href = "form.php?num_id=27&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="27" id="27" name="num_id">27</a></div>
		<div><a href = "form.php?num_id=28&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="28" id="28" name="num_id">28</a></div>
		<div><a href = "form.php?num_id=29&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="29" id="29" name="num_id">29</a></div>
		<div><a href = "form.php?num_id=30&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="30" id="30" name="num_id">30</a></div>
		<div><a href = "form.php?num_id=31&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="31" id="31" name="num_id">31</a></div>
		<div><a href = "form.php?num_id=32&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="32" id="32" name="num_id">32</a></div>
		<div><a href = "form.php?num_id=33&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="33" id="33" name="num_id">33</a></div>
		<div><a href = "form.php?num_id=34&class=Economy&cost=178,254&dest=Barnard's Star&flight=2" class = "cabin_top_economy" value="34" id="34" name="num_id">34</a></div>
		<div><a href = "form.php?num_id=35&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="35" id="35" name="num_id">35</a></div>
		<div><a href = "form.php?num_id=36&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="36" id="36" name="num_id">36</a></div>
		<div><a href = "form.php?num_id=37&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="37" id="37" name="num_id">37</a></div>
		<div><a href = "form.php?num_id=38&class=Luxury&cost=278,338&dest=Barnard's Star&flight=2" class = "cabin_top_luxury" value="38" id="38" name="num_id">38</a></div>
	</div>
</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			const cabins = {
			1:true,
			2:true,
			3:true,
			4:true,
			5:true,
			6:true,
			7:true,
			8:true,
			9:true,
			10:true,
			11:true,
			12:true,
			13:true,
			14:true,
			15:true,
			16:true,
			17:true,
			18:true,
			19:true,
			20:true,
			21:true,
			22:true,
			23:true,
			24:true,
			25:true,
			26:true,
			27:true,
			28:true,
			29:true,
			30:true,
			31:true,
			32:true,
			33:true,
			34:true,
			35:true,
			36:true,
			37:true,
			38:true
			};
			var key = Object.keys(cabins);
			
			console.log(key[0]);
			for(var k = 0; k < <?php echo count($num)?>; k++){
				var j = <?php echo json_encode($num)?>[k];
			for(var i = 0; i <= 37; i++){
				var numID = 25;
				if(key[i] == j){
					cabins[i + 1] = false;
					var p = (i+1).toString();
					if(document.getElementById(p).className == "cabin_top_economy")
						document.getElementById(p).className = "cabin_taken";
					else
						document.getElementById(p).className = "cabin_luxury_taken";
				}
			}
			}
			

		</script>
	</div>
		
	
</div>

</body>
</html>
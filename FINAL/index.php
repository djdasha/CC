<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>CROWDSOURCED AUTOMATED PAINTING</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<?php
	// define variables and set to empty values
	$colorErr;
	$color;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	  if (empty($_POST["color"])) {
	    $colorErr = "color is required";
	  } else {
	    $color = test_input($_POST["color"]);
	  }
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

	<div id="page-wrap">
		<div class="tb">
<h1><b><a href="index.php" style="text-decoration: none; color: white;">CROWDSOURCED AUTOMATED PAINTING</a></b></h1>
</div><br><br>
<form color="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<div id="color">
			<!-- color:<br><br> -->
			<h3>Pick a color</h3><br><br><br>

			<input class="submit" type="submit" value="FFE36A" name="color" id="yellow1" >
			<input class="submit" type="submit" value="FFD82A" name="color" id="yellow2">
			<input class="submit" type="submit" value="FFBB15" name="color" id="yellow3">
			<input class="submit" type="submit" value="E9A500" name="color" id="yellow4"><br><br>

			<input class="submit" type="submit" value="FFC1AA" name="color" id="orange1">
			<input class="submit" type="submit" value="FFAB94" name="color" id="orange2">
			<input class="submit" type="submit" value="FF977F" name="color" id="orange3">
			<input class="submit" type="submit" value="FF7F66" name="color" id="orange4"><br><br>

			<input class="submit" type="submit" value="F5BFFF" name="color" id="purple1">
			<input class="submit" type="submit" value="FB94FF" name="color" id="purple2">
			<input class="submit" type="submit" value="D33FFF" name="color" id="purple3">
			<input class="submit" type="submit" value="C700EE" name="color" id="purple4"><br><br>

			<input class="submit" type="submit" value="AFCDF9" name="color" id="blue1">
			<input class="submit" type="submit" value="94A8FF" name="color" id="blue2">
			<input class="submit" type="submit" value="6A91FF" name="color" id="blue3">
			<input class="submit" type="submit" value="2A51FF" name="color" id="blue4"><br><br>

			<input class="submit" type="submit" value="A3EFA3" name="color" id="green1">
			<input class="submit" type="submit" value="85D685" name="color" id="green2">
			<input class="submit" type="submit" value="6FBC6F" name="color" id="green3">
			<input class="submit" type="submit" value="51A34D" name="color" id="green4"><br><br>
</div>

<?php
if(isset($_POST['color'])){
// $servername = "dashailicbsmat.mysql.db";
// $username = "dashailicbsmat";
// $password = "Smat2017";
// $dbname = "dashailicbsmat";
$servername = "dashailicbsmat.mysql.db";
$username = "dashailicbsmat";
$password = "Smat2017";
$dbname = "dashailicbsmat";



// header("Location: result.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
}
$up_id = uniqid();
$uid = $up_id;
$color = $color;
// sql to create table
$sql = "CREATE TABLE CC (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
uid VARCHAR(30) NOT NULL,
color VARCHAR(30) NOT NULL,
shape VARCHAR(30) NOT NULL,
number1 INT(255) NOT NULL,
number2 INT(255) NOT NULL,
reg_date TIMESTAMP
)";

// $sql = "INSERT INTO CC2 (color, uid) VALUES ('".$_POST["$uid"]."')";
// $sql = "INSERT INTO CC2 (color, uid) VALUES ('".$_POST["color"]."', '$uid', '$color')";
// unset($_POST["color"]);
// if ($conn->query($sql) === TRUE) {
//     echo "Got it!";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


echo "<script type='text/javascript'> document.location = 'page2.php?uid=$up_id&color=$color'; </script>";

// echo "<script type='text/javascript'> document.location = 'result_copy.php'; </script>";
// header('Location: result.php');



$conn->close();

}
?>
</form>
	</div>


</body>

</html>

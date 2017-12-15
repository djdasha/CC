<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>CROWDSOURCED AUTOMATED PAINTING</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
</head>

<body>

	<?php
	// define variables and set to empty values
	$shapeErr;
	$shape;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	  if (empty($_POST["shape"])) {
	    $shapeErr = "shape is required";
	  } else {
	    $shape = test_input($_POST["shape"]);
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
<form shape="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<div id="shape">
			<!-- shape:<br><br> -->
			<h3>Pick a shape</h3><br><br><br>

			<input class="submit" type="submit" value="stline" name="shape" id="stline"> <br>
<!-- 			<input class="submit" type="submit" value="culine" name="shape" id="culine">
 -->			<input class="submit" type="submit" value="circle" name="shape" id="circle">
			<input class="submit" type="submit" value="fillRect" name="shape" id="rect"><br><br>	
</div>

<?php
if(isset($_POST['shape'])){
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

$uid = $_GET['uid']; 
$color = $_GET['color'];
// $color = $color;
$shape = $shape;
// $sql = "INSERT INTO CC2 (shape, uid) VALUES ('".$_POST["shape"]."', '$uid', '$color')";
// unset($_POST["shape"]);
// if ($conn->query($sql) === TRUE) {
//     echo "Got it!";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
echo "<script type='text/javascript'> document.location = 'page3.php?uid=$uid&color=$color&shape=$shape'; </script>";

$conn->close();

}
?>
</form>
	</div>


</body>

</html>

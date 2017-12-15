<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>CROWDSOURCED AUTOMATED PAINTING</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>

<body>

	<?php
	// define variables and set to empty values
	$number1Err;
	$number1;


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	  if (empty($_POST["number1"])) {
	    $number1Err = "Action is required";
	  } else {
	    $number1 = test_input($_POST["number1"]);
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
<form enter="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<div id="enter">
			<!-- Action:<br><br> -->
			<h3>Pick the size and positioning</h3><br><br><br>
			<h4>Position on the x-axis of the shape (0 to 1080)</h4>
			<input class="submit" type="number" value="0" name="number1" id="number_stline"> <br>
			<h4>Position on the y-axis of the shape (0 to 1920)</h4>
			<input class="submit" type="number" value="0" name="number2" id="number_stline"> <br>
			<input class="submit" type="submit" value="submit" name="enter" id="submit"> <br>

			
</div>

<?php
if(isset($_POST['enter'])){
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
$color = '#'.$color;
$shape = $_GET['shape'];
$sql = "INSERT INTO CC (uid, color, shape, number1, number2) VALUES ('$uid', '$color', '$shape', '".$_POST["number1"]."', '".$_POST["number2"]."')";
unset($_POST["uid, color, shape, number1, number2"]);

if ($conn->query($sql) === TRUE) {
    echo "Got it!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// $sql = "INSERT INTO CC2 (number1, number2, uid) VALUES ('".$_POST["number1"]."', '".$_POST["number2"]."', '$uid')";
// unset($_POST["number1, number2"]);

// if ($conn->query($sql) === TRUE) {
//     echo "Got it!";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

// echo "<script type='text/javascript'> document.location = 'result_copy.php'; </script>";
// header('Location: result.php');



$conn->close();

}
?>

</form>
	</div>


</body>

</html>

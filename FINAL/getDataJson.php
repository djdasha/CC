<?php

//$q = intval($_GET['q']);
$lastId = $_GET['lastId'];

$con = mysqli_connect('dashailicbsmat.mysql.db','dashailicbsmat','Smat2017','dashailicbsmat');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"dashailicbsmat");
$sql="SELECT * FROM CC WHERE id > '$lastId' ORDER BY uid DESC LIMIT 1 ";
// $sql="SELECT * FROM CC2 ORDER BY uid DESC LIMIT 4";
$result = mysqli_query($con,$sql);

$json = array();
while($r = mysqli_fetch_assoc($result)) {
    $json[] = $r;
}

// while($row = mysqli_fetch_array($result)) {
 	
//  	$json[] = $row ;

// }


print json_encode($json);
?>
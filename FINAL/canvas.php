<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>CROWDSOURCED AUTOMATED PAINTING</title>
	<style>
	.error {color: #FF0000;}
	</style>
	<script type="text/javascript" href="three.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
<?php
	$result = mysql_query("SELECT field_name, field_value
	                       FROM the_table");
	$to_encode = array();
	while($row = mysql_fetch_assoc($result)) {
	  $to_encode[] = $row;
	}
	echo json_encode($to_encode);
	$uid = $_GET['uid']; 
?>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script>
    $.getJSON('data.php', function(data) {
      $.each(data, function(fieldName, fieldValue) {
        $("#" + fieldName).val(fieldValue);
      });
    });
  </script>
</html>
<?php

	$server = "localhost"; //ServerName
	$user = "root"; //UserName
	$pass = ""; //Default password

	$dbname = "auth"; // Enter The Database Name You should connect

	$con = mysqli_connect($server,$user,$pass,$dbname);
	//check Connection
	if (!$con) {
		die("Connection Failed".mysqli_connect_error());
		echo "Connection Failed";
	}
	echo "Connection Successfully";

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Connection</title>
</head>
<body>
	<script type="text/javascript">
		alert(<?php echo "Connection Successfully";?>);
	</script>

</body>
</html>
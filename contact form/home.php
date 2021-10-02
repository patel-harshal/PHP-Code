<?php
	$server="127.0.0.1";
	$uname="root";	
	$pass="";
	$database="test";
	$con=mysqli_connect($server,$uname,$pass,$database);
    
    $name=$_GET['name'];
    $email=$_GET['email'];
    $contactnumber=$_GET['contactnumber'];
	$message=$_GET['message'];

	if($name=="" OR $email=="" OR $contactnumber=="")	//VALIDATION FOR EMPTY BOXES ;)
    {	echo "Please Enter Some Values";
        exit;
    }
    if(strlen($contactnumber)!=10)	// NUMBER VALIDATION
    {
        echo "Enter Valid 10 digit number";
        exit;
    }
    if(strlen($message)<10)	// NUMBER VALIDATION
    {
        echo "Enter minimum 10 chareters in the message";
        exit;
    }	
    else 	//iF NOT NULL THEN INSERT 
        $insertsql="insert into users(`name`,`email`,`number`,`message`) VALUES('$name','$email','$contactnumber','$message');";
        $insertcmd=mysqli_query($connect,$insertsql);
        echo "<Script>alert('Inserter successfully')</script>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
</body>
</html>
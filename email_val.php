<?php

	$email = $_POST["email"];

$host="127.0.0.1";$dbusername="root";$dbpassword="";$dbname="practice";
    
    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "SELECT * FROM Test WHERE email = '".$email."'";
			$result_e = mysqli_query($conn,$sql_e);
			echo mysqli_num_rows($result_e);
		}
   
    die();	

?>

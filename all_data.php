<?php

session_start();
$username = $_SESSION["username"];

if(isset($username))
{
              $host="127.0.0.1";
              $dbusername="root";
              $dbpassword="";
              $dbname="practice";
              $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);

                if(mysqli_connect_error())
                       {
                    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
                  }
                else
                  {
			if($username == "prdepyadv")
			{
			    $sql_e = "SELECT * FROM Test";
			    $upload = array();
				$i = 0;
			    $result_e = mysqli_query($conn,$sql_e);
			    while ($row = mysqli_fetch_assoc($result_e))
			    {	 
				    $upload[$i] = array("id" => $row["id"],"first" => $row["first"],"last" => $row["last"],"email" => $row["email"],"password" => $row["password"],"dob" => $row["dob"],"register_date" => $row["register_date"],"Phone" => $row["Phone"], "image_path" => $row["image_path"], "username" => $row["username"]);
					$i = $i+1;
			    }
				echo json_encode($upload);
			}
			else
			{
			    $sql_e = "SELECT * FROM Test WHERE username = '".$username."'";
			    $upload = array();
				$i = 0;
			    $result_e = mysqli_query($conn,$sql_e);
			    while ($row = mysqli_fetch_assoc($result_e))
			    {	 
				    $upload[$i] = array("id" => $row["id"],"first" => $row["first"],"last" => $row["last"],"email" => $row["email"],"password" => $row["password"],"dob" => $row["dob"],"register_date" => $row["register_date"],"Phone" => $row["Phone"], "image_path" => $row["image_path"], "username" => $row["username"]);
					$i = $i+1;
			    }
				echo json_encode($upload);
			}
                  }	
}
else
{
	echo "<script>window.location.replace('./index.php')</script>";
}
?>

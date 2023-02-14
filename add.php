<?php 
$con = mysqli_connect("localhost", "root", "", "studentProject");
if ($con === false) {
    die("ERROR" . mysqli_connect_error($con));
}
extract($_POST);
	if (isset($add)) {
		if (!empty($id)) {
            session_start();
            $sid=$_SESSION['user_id'];
            $query="INSERT INTO registration VALUES ($sid , $id , 0.0)";
            $result=mysqli_query($con,$query);		
            	if ($result) {
				echo 'Added Successfuly';
			}else {
				echo 'Error';				
			}
		}
	}
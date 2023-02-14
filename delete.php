<?php 
$con = mysqli_connect("localhost", "root", "", "studentProject");
if ($con === false) {
    die("ERROR" . mysqli_connect_error($con));
}
extract($_POST);
	if (isset($delete)) {
		if (!empty($id)) {
            session_start();
            $sid=$_SESSION['user_id'];
            $query="DELETE FROM registration WHERE c_id=$id AND st_id=$sid";
            $result=mysqli_query($con,$query);		
            	if ($result) {
				echo 'Deleted Successfuly';
				// echo '<div class="container"><div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div></div>';
			}else {
				echo 'Error';				
			}
		}
	}

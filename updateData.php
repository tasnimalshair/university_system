<?php
extract($_POST);
$con = mysqli_connect("localhost", "root", "", "studentProject");
if ($con === false) {
    die("ERROR" . mysqli_connect_error($con));
}
if (isset($submit)) {
if ( isset($fName) && isset($lName) && isset($email) && isset($phone) && isset($college_id)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        session_start();
        $sid = $_SESSION['user_id'];
        $query = "UPDATE student SET first_name='$fName' ,  last_name='$lName' , email='$email' ,
            phone='$phone', college_id=$college_id WHERE st_id=$sid";
    
        $result = mysqli_query($con, $query);
        if ($result === false) {
            echo "error";
        } else {
            echo "<script>window.alert('Updated Successfully')</script>";
            echo "Updated Successfully :)";
        }
    }else{
        echo "Error Email";
    }
}else{echo "no";}
}

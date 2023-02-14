<?php 
    extract($_POST);
    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // $userEmail=$email;

    // if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //     echo("$email is not a valid email <br>");
    // }

    $con = mysqli_connect("localhost", "root", "", "studentProject");
    if ($con === false) {
        die("ERROR" . mysqli_connect_error($con));
    }
    $query = "select * from users where id='" . $id . "' and password='" . $password . "'";
    $result = mysqli_query($con, $query);
    $user_id=$id;
    // $GLOBALS['user_id'];
    session_start();
    $_SESSION['user_id']=$id;
    // function getId(){return $user_id;}
    if (mysqli_num_rows($result) > 0) {
        header("Location: ../main.php");
    }else{
        echo "Username or password is not correct!";
    }

    

<?php include_once("head.php");?>
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">

<title>My page title</title>
<style>
    main {
        display: flex;
        font-size: 18px;
    }

    section {
        flex: 4;
        margin-left: 20px;
        margin-right: 20px;

    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<link rel="stylesheet" href="css/main.css" />
<script src="js/jquery-3.6.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slim.min.js"></script>

</head>

<body>

    <?php
    extract($_POST);
    $con = mysqli_connect("localhost", "root", "", "studentproject");
    if ($con === false) {
        die("ERROR" . mysqli_connect_error($con));
    }



    session_start();
    $sID = $_SESSION['user_id'];
    $query = "SELECT  r.c_id , c.name , r.grade  FROM registration r , course c
     where st_id=$sID AND r.c_id=c.c_id ";
    $result = mysqli_query($con, $query);
    if ($result === false) {
        echo "error";
    }


    ?>
    <main>
        <section>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Course ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['c_id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['grade'] ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </section>
    </main>

</body>

</html>
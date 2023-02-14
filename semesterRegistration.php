<?php include_once("head.php");
$con = mysqli_connect("localhost", "root", "", "studentProject");
if ($con === false) {
    die("ERROR" . mysqli_connect_error($con));
}
session_start();
$sid = $_SESSION['user_id'];
// $query = "SELECT * FROM course c , registration r WHERE c.c_id=r.c_id AND r.st_id=$sid";
$query = "SELECT * FROM course c,student s WHERE st_id=$sid AND c.s_id=s.college_id;";
$result = mysqli_query($con, $query);
if ($result === false) {
    echo "error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</head>

<body>
    <form action="semesterData.php" method="POST">

        <main>
            <section>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Course NO</th>
                            <th scope="col">Course</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <th><?php echo $row['c_id'] ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td>
                                    <?php
                                    $cid = $row['c_id'];
                                    $check = "SELECT * FROM registration WHERE st_id=$sid AND c_id=$cid;";
                                    $r = mysqli_query($con, $check);
                                    if ($r === false) {
                                        echo "error";
                                    }
                                    if (mysqli_num_rows($r) > 0) {  ?>
                                        <form action="add.php" method="POST">
                                            <input type="hidden" name="id" value=<?php echo $row['c_id']; ?>>
                                            <button onclick="return confirm('Are you sure?')" disabled style="width: 100px; height: 40px; font-size: 18px;" type="submit" name="add" class="btn btn-success">ADD</button>
                                        </form>
                                    <?php  } else { ?>
                                        <form action="add.php" method="POST">
                                            <input type="hidden" name="id" value=<?php echo $row['c_id']; ?>>
                                            <button onclick="return confirm('Are you sure?')" style="width: 100px; height: 40px; font-size: 18px;" type="submit" name="add" class="btn btn-success">ADD</button>
                                        </form>
                                    <?php   }
                                    ?>
                                </td>


                                <td>
                                    <?php
                                    $cid = $row['c_id'];
                                    $check2 = "SELECT * FROM registration WHERE st_id=$sid AND c_id=$cid;";
                                    $rr = mysqli_query($con, $check2);
                                    if ($rr === false) {
                                        echo "error";
                                    }
                                    if (mysqli_num_rows($rr) > 0) {  ?>
                                        <form action="delete.php" method="POST">
                                            <input type="hidden" name="id" value=<?php echo $row['c_id']; ?>>
                                            <button onclick="return confirm('Are you sure?')" style="width: 100px; height: 40px; font-size: 18px;" type="submit" name="delete" class="btn btn-danger">DELETE</button>
                                        </form>
                                    <?php  } else { ?>
                                        <form action="delete.php" method="POST">
                                            <input type="hidden" name="id" value=<?php echo $row['c_id']; ?>>
                                            <button disabled onclick="return confirm('Are you sure?')" style="width: 100px; height: 40px; font-size: 18px;" type="submit" name="delete" class="btn btn-danger">DELETE</button>
                                        </form>
                                    <?php   }
                                    ?>
                                </td>




                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </section>
            <main>
    </form>
</body>

</html>
<?php include_once("head.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <head>
        <meta charset="utf-8">

        <title>My page title</title>
        <style>
            main {
                display: flex;
                font-size: 18px;
            }

            section  {
                flex: 4;
                margin-left: 20px;
                margin-right: 20px;

            }
        </style>

    </head>

<body>
    <?php

    extract($_POST);
    $con = mysqli_connect("localhost", "root", "", "studentProject");
    if ($con === false) {
        die("ERROR" . mysqli_connect_error($con));
    }

    if (isset($btn)) {
		if (!empty($hidden)) {
            $query="select * from course where s_id=$hidden";
            $result=mysqli_query($con,$query);
            if ($result === false) {
                echo "error";
            }		
		}
	}

    ?>
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
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </section>
        <?php include_once("aside.php");
        ?>


    </main>

</body>

</html>
    <?php include_once("head.php"); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <head>
            <meta charset="utf-8">

            <title>My page title</title>
            <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css"> -->
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <link rel="stylesheet" href="css/main.css" />
            <script src="js/jquery-3.6.0.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <style>
                main {
                    display: flex;
                    font-size: 18px;
                }

                article {
                    flex: 4;
                }
            </style>

        </head>

    <body>
        <main>
            <article>
                <h2>المساقات</h2>
                <?php
                extract($_POST);
                $conn = mysqli_connect("localhost", "root", "", "studentProject");
                if ($conn === false) {
                    die("ERROR" . mysqli_connect_error($con));
                }
                $query = "select * from course where name like'%" . $search . "%'";
                $result = mysqli_query($conn, $query);

                ?>

                <main>
                    
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                <th scope="col">اسم المساق</th>
                                    <th scope="col">رقم المساق</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['name'] ?></td>
                                        <th><?php echo $row['c_id'] ?></th>

                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    




                </main>

            </article>

            <?php include_once("aside.php"); ?>

        </main>
    </body>

    </html>
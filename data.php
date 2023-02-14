<?php include_once("head.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 18px;
        }

        /* section {
            height: 100%;
        } */

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            /* font-size: 18px; */
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "studentProject");
    if ($con === false) {
        die("ERROR" . mysqli_connect_error($con));
    }
    session_start();
    $query = "SELECT  *  FROM student WHERE st_id=" . $_SESSION['user_id'];
    $sid = "";
    $fname = "";
    $lname = "";
    $semail = "";
    $sphone = "";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $sid = $row['st_id'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $semail = $row['email'];
        $sphone = $row['phone'];
        $college=$row['college_id'];
    }
    ?>
    <form action="updateData.php" method="POST">
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">

                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="image/students.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 660px; width: 620px;" />
                                </div>


                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                        <div class="row">

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input style="font-size: 15px;" disabled name="id" value=<?php echo $sid; ?> type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">ID</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input style="font-size: 15px;" name="fName" value=<?php echo $fname; ?> type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input style="font-size: 15px;" name="lName" value=<?php echo $lname; ?> type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input style="font-size: 15px;" name="email" value=<?php echo $semail; ?> type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Email</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input style="font-size: 15px;" name="phone" value=<?php echo $sphone; ?> type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Phone</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input style="font-size: 15px;" name="college_id" value=<?php echo $college; ?> type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">College NO</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button onclick="confirm('Do you want to update?');" style="width: 130px; height: 44px; font-size: 18px; font-weight: bold;" name="submit" type="submit" class="btn btn-warning btn-lg ms-2">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>
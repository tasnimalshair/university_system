<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        html {
            font-size: 10px;
        }
    
        h1,
        h2,
        h3 {
            font-family: 'Sonsie One', cursive;
            color: #2a2a2a;
        }

        p,
        input,
        li {
            font-family: 'Open Sans Condensed', sans-serif;
            color: #2a2a2a;
        }

        h1 {
            font-size: 4rem;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 10px black;
        }

        h2 {
            font-size: 3rem;
            text-align: center;
        }

        h3 {
            font-size: 2.2rem;
        }

        p,
        li {
            font-size: 1.6rem;
            line-height: 1.5;
        }

        /* || header layout */

        nav,
        article,
        aside,
        footer {
            background-color: white;
            padding: 1%;
        }

        nav {
            height: 50px;
            background-color: #32C8E3;
            display: flex;
            /* margin-bottom: 10px; */
        }

        nav ul {
            padding: 0;
            list-style-type: none;
            flex: 2;
            display: flex;
        }

        nav li {
            display: inline;
            text-align: center;
            flex: 1;
        }

        nav a {
            display: inline-block;
            font-size: 2rem;
            text-transform: uppercase;
            text-decoration: none;
            color: black;
        }

        nav form {
            flex: 1;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 2em;
        }

        input {
            font-size: 15px;
            height: 32px;
        }

        input[type="search"] {
            flex: 3;
        }

        input[type="submit"] {
            flex: 1;
            margin-left: 10px;
            background: #333;
            border: 0;
            color: white;
        }
    </style>
</head>

<body>

    <nav>
        <img src="image/logo.jpg" width="50" height="30" alt="">

        <ul>
            <li><a href="data.php">بيانات الطالب</a></li>
            <li><a href="grades.php">علامات الطالب</a></li>
            <li><a href="semesterRegistration.php">التسجيل الفصلي</a></li>
            <li><a href="main.php">عرض الكليات</a></li>
        </ul>

        <!-- A Search form is another common non-linear way to navigate through a website. -->

        <form method="POST" action="searchForCourse.php">
            
            <input  type="search" name="search" placeholder="ابحث عن مساق">
            <input style="width: 70px; height: 35px; background-color: #7F868E;" type="submit" value="بحث">
            
        </form>
    </nav>

</body>

</html>
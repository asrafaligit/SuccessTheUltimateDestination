<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400;500,600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <style>
        body {
            background: radial-gradient(#a6f0d3, white);

        }

        .center {
            margin: auto;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        nav {
            text-align: center;
            padding-top: 2%;
            padding-bottom: 2%;
            background-color: black;
        }

        nav ul {
            display: inline-block;
            list-style-type: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a:hover {
            background-color: rgba(222, 220, 220, 0.233);
            color: rgba(146, 133, 148, 0.867);
        }

        a {
            text-decoration: none;
            color: #fff
        }

        p {
            color: #555;
        }

        .btn {
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 20px;
            margin: 20px 0;
            border-radius: 20px;

        }

        .btn:hover {
            background-color: black;
        }

        .header {

            background: radial-gradient(#fff, #ffd6d6);
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
            </div>
            <nav>
                <ul>
                    <li><a href="adminhome.php">Home</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
    <div style="margin-top: 100px;" class="center">
        <a style="height: 150px; width: 150px; padding-top: 30px;margin-left: 500px; padding-left: 20px;" href="managecourse.php" class="btn">Manage Exams</a>
        <a style="height: 150px; width: 150px; padding-top: 50px; padding-left: 20px;" href="manageproduct.php" class="btn">Manage Books </a>
        <a style="height: 150px; width: 150px; padding-top: 50px; padding-left: 20px;" href="view_orders.php" class="btn">View Orders</a>
        <a style="height: 150px; width: 150px; padding-top: 50px; padding-left: 20px;" href="successful_orders.php" class="btn">Successful orders</a>
    </div>

</body>

</html>
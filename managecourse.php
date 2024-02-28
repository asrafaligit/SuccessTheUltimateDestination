<?php

$name = "";
$appdate = "";
$lastdate = "";
$commence = "";
$result = "";
$syl = "";
$cname ="";
$conn3 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
// Check connection
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
}
if (isset($_POST['cname'])) {
    $cname = $_POST['cname'];
    $que = "SELECT * FROM `succ_the_ulti_dest`.`course` WHERE cname = '$cname';";
    $res = $conn3->query($que);
    if (mysqli_num_rows($res) > 0) {
        while ($row = $res->fetch_assoc()) {
            $name = $row['cname'];
            $appdate = $row['app_date'];
            $lastdate = $row['last_date'];
            $commence = $row['commence'];
            $result = $row['result'];
            $syl = $row['syllabus'];
        }
    } else {
        echo "<script>alert('no record found');</script>";
    }
}
if (isset($_POST['update-btn'])) {
    $uname = $_POST['examname'];
    $uappdate = $_POST['appdate'];
    $ulastdate = $_POST['lastdate'];
    $ucommence = $_POST['commencedate'];
    $uresult = $_POST['resultdate'];


    if (isset($_FILES['pdf'])) {
        $imgname = $_FILES['pdf']['name'];
        $imgtemp = $_FILES['pdf']['tmp_name'];
        $imgex = pathinfo($imgname, PATHINFO_EXTENSION);
        $imgex = strtolower($imgex);
        $allex = array("pdf");
        if (in_array($imgex, $allex)) {
            $newimg = uniqid("PDF-", true) . '.' . $imgex;
            $imgpath = 'Uploads/' . $newimg;
            move_uploaded_file($imgtemp, $imgpath);
            $syl = $newimg;
        } else {
            echo "unknown error";
        }
    }
    $que = "UPDATE `succ_the_ulti_dest`.`course` SET cname='$uname', app_date = '$uappdate', last_date = '$ulastdate', commence = '$ucommence', result = '$uresult' , syllabus = '$syl' WHERE cname = '$uname';";
    $conn3->query($que);
    echo "<script>alert('Updated successfully');</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>

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

        #update-details {
            display: flex;
            flex-direction: row;
        }

        #leftmenu {
            width: 15%;
            height: 100vh;
            border-right: 1px solid black;
        }

        .btn2 {
            margin-left: 50px;
            margin-top: 30px;
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 30px;
            border-radius: 30px;
        }

        #body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: row;
            background: radial-gradient(#a6f0d3, white);
            font-size: 32px;
        }

        input {
            text-align: center;
            line-height: 55px;
            color: #fcfcfc;
            transition: 0.5s;
            font-size: 1.1rem;
            height: 40px;
            margin-top: 50px;
        }

        input {
            background: #979595;
            outline: none;
            border: none;
            line-height: 1;
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
            border-radius: 20px;
        }

        input::placeholder {
            color: rgb(214, 205, 205);
            font-weight: 500;
        }

        label {
            margin-left: 50px;
        }

        #update-details {
            display: flex;
            flex-direction: row;
        }

        .mar {
            margin-left: 500px;
        }

        .desc_text {
            margin-left: 80px;
            margin-top: 20px;
            background: #979595;
            outline: none;
            border: none;
            line-height: 1.5;
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
            border-radius: 10px;

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
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>

        </div>
    </div>
    </div>
    <hr>

    <div id="update-details">
        <div>
            <form action="managecourse.php" method="post">
                <h1 align= "center" style="font-size: 50px;">UPDATE EXAM DETAIL</h1>
                <label for="p-id">Course Name</label>
                <input type="text" name="cname" placeholder="Enter Course Name" />
                <button class="btn2">Fetch Details</button><br>
            </form>
            <form action="managecourse.php" method="post" enctype="multipart/form-data">
                <label class="mar" for="pr-name">Exam name</label>
                <input type="text" name="examname" placeholder="Enter Exam Name" value="<?php echo $name; ?>"></input><br>
                <label class="mar" for="price">Application Date</label>
                <input type="text" name="appdate" placeholder="Enter Application Date" value="<?php echo $appdate; ?>"></input><br>
                <label class="mar" for="stav">Last Date for Application</label>
                <input type="text" name="lastdate" placeholder="Enter last date for application" value="<?php echo $lastdate;  ?>" /><br>
                <label class="mar" for="stav">Date of commencement</label>
                <input type="text" name="commencedate" placeholder="Enter date for commencement" value="<?php echo $commence;  ?>" /><br>
                <label class="mar" for="stav">Date of Result</label>
                <input type="text" name="resultdate" placeholder="Enter date of Result" value="<?php echo $result;  ?>" /><br>
                <label class="mar" for="stav">Select pdf for syllabus</label>
                <input type="file" name="pdf" accept="application/pdf" /><br>
                <button class="btn2" name="update-btn" style="background-color: blueviolet; margin-left: 50%; margin-top: 5%;">Update</button><br>
            </form>
        </div>
    </div>

</body>

</html>
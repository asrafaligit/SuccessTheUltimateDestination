<?php
 $conn3 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
 // Check connection
 if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
  }
$name = $_POST['course'];
  $que = "SELECT * from `succ_the_ulti_dest`.`course` WHERE cname = '$name';";
$res = $conn3->query($que);
$row = $res->fetch_assoc();
$appdate = $row['app_date'];
$ldate = $row['last_date'];
$commence = $row['commence'];
$resu = $row['result'];
$syl = $row['syllabus'];
?>

<!DOCTYPE html>
<html lang="en">


<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td,
  #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #customers tr:hover {
    background-color: #ddd;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
  <meta name="author" content="Inovatik">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <!-- Website Title -->
  <title>exams</title>

  <!-- Styles -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet"> -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <link href="css/swiper.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="homestyle.css">

  <!-- Favicon  -->
  <link rel="icon" href="images/favicon.png">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      box-sizing: content-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #0a0707;
    }

    .topnav a {
      float: left;
      display: block;
      color: rgb(245, 236, 236);
      text-align: center;
      padding: 15px 30px;
      text-decoration: none;
      font-size: 20px;
    }

    .topnav a:hover {
      background-color: rgba(222, 220, 220, 0.233);
      color: rgba(146, 133, 148, 0.867);
    }

    .topnav a.active {
      background-color: #2b32385b;
      color: rgba(251, 249, 251, 0.499);
    }

    .topnav .search-container {
      float: left;
    }

    .topnav input[type=text] {
      padding: 10px;
      width: 350px;
      margin-top: 12px;
      font-size: 15px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 10px 10px;
      margin-top: 12px;
      margin-right: 16px;
      background: #ddd;
      font-size: 15px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }
  </style>
</head>

<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <nav>
      <div class="topnav">
        <div style="width: 30%;">
    <a style="color: white; margin-left: 2%" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></div><div style="width: 100%;">
    <a style="margin-left: 5%" ; href="homepage.php" class="active">SUCCESS THE ULTIMATE DESTINATION</a></div>
  </div>
  </nav>


  <!-- Intro -->
  <div id="intro" class="basic-1">
    <div class="container">
      <div class="row">
        <h1>View exam Details</h1>

        <p align="justify">
        <table id="customers" border="1" cellpadding="5" cellspacing="5">
          <tr>
            <th>exam name</th>
            <th>application release date</th>
            <th>last date for applying</th>
            <th>date of commencement</th>
            <th>result</th>
            <th>syllabus</th>

          </tr>
          <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $appdate; ?></td>
            <td><?php echo $ldate; ?></td>
            <td><?php echo $commence; ?></td>
            <td><?php echo $resu; ?></td>
            <td><a href="Uploads/<?php echo $syl; ?>">pdf</a></td>

          </tr>
        </table>
        </p>

      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of basic-1 -->
  <!-- end of intro -->
  <!-- <table border="">
    <tr>Books</tr>
    <td><ol type="numberic">
      <th><li>geography</li></th>
      <th><li>civics</li></th>
      <th><li>history</li></th>
    </ol></td>
  </table> -->








</body>

</html>
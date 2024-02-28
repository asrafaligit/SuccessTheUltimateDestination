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

  <!-- SEO Meta Tags -->
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
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

  <body data-spy="scroll" data-target=".fixed-top">
    < !-- Preloader -->
      <div class="spinner-wrapper">
        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
      </div>
      < !-- end of preloader -->

        <body>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <div class="topnav">
            <a class="accicon" href="#account"><img src="./img/account.png" alt="failed to load icon" height="35px" width="25px"> </a>
            <nav>
              <a href="#home">Home</a>
              <a class="active" href="#home">SUCCESS THE ULTIMATE DESTINATION</a>
              <a href="#about">About</a>
              <a href="#contact">Contact</a>
              <a href="#books">Books</a>
              <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </nav>
            <a class="accicon" href="#account"><img src="./img/cart.png" alt="failed to load icon" height="35px" width="25px"> </a>
          </div>
          </div>

        </body>
        <?php
        error_reporting(0);
        session_start();
        ?>

        <!-- Intro -->
        <div id="intro" class="basic-1">
          <div class="container">
            <div class="row">
              <h1>View exam Details</h1>

              <p align="justify">
              <table id="customers" border="1" cellpadding="5" cellspacing="5">
                <tr>
                  <th>exam name
                  <th>application release date
                  <th>last date for applying
                  <th>date of commencement
                  <th>result
                  <th>exam rules
                  <th>syllabus

                </tr>
                <?php
                error_reporting(0);
                session_start();
                $host = "localhost";
                $db = "historical";
                $user = "root";
                $pass = "";

                $conn = new mysqli($host, $user, $pass, $db);

                $sname = $_POST["t2"];

                $sql = "select * from place where sname='$sname'";

                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                  $pname = $row["pname"];
                  $sname = $row["sname"];
                  $pdesc = $row["pdesc"];
                  $location = $row["location"];
                  $nair = $row["nair"];
                  $nrail = $row["nrail"];


                  echo "<tr>";

                  echo "<td>" . $pname;
                  echo "<td>" . $sname;
                  echo "<td>" . $pdesc;
                  echo "<td>" . $location;
                  echo "<td>" . $nair;
                  echo "<td>" . $nrail;
                  echo "<td>" . $nrail;

                  echo "</tr>";
                }
                ?>
              </table>
              <br><br>
              <left><a href="exam.html"><button class="btn btn-primary" id="submit" type="button">Back</button></a></left>
              </p>

            </div> <!-- end of row -->
          </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of intro -->








  </body>

</html>
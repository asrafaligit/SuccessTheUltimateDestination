<?php
$conn3 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
// Check connection
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
}
session_start();
$uname = $_SESSION['uname'];
$que = "SELECT * FROM `succ_the_ulti_dest`.`login_details` WHERE username = '$uname';";
$res = $conn3->query($que);
$row = $res->fetch_assoc();
$name = $row['name'];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="homestyle.css">
</head>

<body>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400;500,600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
      padding: 15px 20px;
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
      width: 300px;
      margin-top: 1%;
      font-size: 15px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 10px 10px;
      margin-top: 1%;
      margin-right: 0px;
      background: #ddd;
      font-size: 9px;
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
     
      .column img{
        transition: transform 0.5s;
      }

      .column img:hover {
    transform: translateY(-15px);
    }
  </style>
  </head>

  <body>

    <div class="topnav">
      <nav style="min-width: 80%;">
        <a href="#home"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a class="active" href="#home">SUCCESS THE ULTIMATE DESTINATION</a>
        <a href="myorders.php">My Orders</a>
        <a href="books.php">Books</a>
        <div class="search-container">
          <form action="search.php" method="post">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </nav>
          <a class="accicon" href="profile.php"><?php
          echo $name; ?></a>
              <a href="login.php">Logout</a>
    </div>
    </div>

  </body>

  <div class="row">
    <div class="column"><form action="exam2.php" method="post"><input type="hidden" name="course" value="upsc"><button>
    <img src="img/upsc.jpg" alt="UPSC" width="200" height="220"></button></form>
    </div>
    <div class="column"><form action="exam2.php" method="post"><input type="hidden" name="course" value="jee"><button>
      <img src="img/jee.jpg" alt="JEE" width=" 200" height="220"></button></form>
    </div>
    <div class="column"><form action="exam2.php" method="post"><input type="hidden" name="course" value="neet"><button>
      <img src="img/neet.jpg" alt="NEET" width=" 200" height="220"></button></form>
    </div>
    <div class="column"><form action="exam2.php" method="post"><input type="hidden" name="course" value="nda"><button>
      <img src="img/nda.jpg" alt="NDA" width=" 200" height="220"></button></form>
    </div>
    <div class="column"><form action="exam2.php" method="post"><input type="hidden" name="course" value="railway"><button>
      <img src="img/rrb.jpg" alt="RRB" width="200" height="220"></button></form>
    </div>
  </div>
  <div class="row">
    <div class="column"><form action="monthlynewz.php" method="post"><input type="hidden" name="course" value="monthly"><button>
      <img src="img/monthly.jpg" alt="monthly" style="width: 100%;" height="400"></button></form>
    </div>
  </div><br><br>
  
  <!-- <div class="footer">
                 <div class="container">
                     <div class="row">
                         <div class="footer-col-3">
                          <hr>
                             <h3>Useful Links</h3>
                             <ul>
                                 <li>Coupons</li>
                                 <li>Books</li>
                                 <li>Return Policy</li>
                                 <li> Join Affiliate</li>
                             </ul>
                         </div>
                     <div class="footer-col-4">
                      <hr>
                         <h3>Follow us</h3>
                          <ul>
                              <li>facebook</li>
                              <li>Twitter</li>
                              <li>Instagram</li>
                              <li>Youtube</li>
                          </ul>
                         </div>
                     </div>
                 </div>
             </div> -->


</body>

</html>
<?php 
$rec = false;
$conn3 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
// Check connection
if ($conn3->connect_error) {
  die("Connection failed: " . $conn3->connect_error);
}
    $pname = $_POST['search'];
    $que = "SELECT * FROM `succ_the_ulti_dest`.`products` WHERE pr_name LIKE '%$pname%';";
    $res = $conn3->query($que); 
    if(mysqli_num_rows($res)>0){
        // echo "in";
    }
    else{
        $rec = true;
      }
?>

<!DOCTYPE html>
<html>

<head>
  <title>search</title>
  <link rel="stylesheet" href="homestyle.css">
</head>

<body>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
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
        margin-top: 10%;
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
    .column {
      flex-basis: 10%;
      padding: 10px;
      min-width: 250px;
      margin-bottom: 30px;
      transition: transform 0.5s;
    }

    .column img {
      width: 100%;
    }
    .btn {
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 5px 40px;
    margin: 30px 0;
    border-radius: 30px;
    margin-right: 150px;
}

.btn:hover {
    background-color: black;
}
  </style>
  <?php 
if($rec == true){
  ?>
<meta http-equiv="refresh" content="4; url = homepage.php" />
<script>
document.write("<h1><center><i>No Record Found....Redirecting to home page</i></center></h1>");
  </script>
  <?php
}
  ?>
  <body>

    <div class="topnav">
      <nav>
        <a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a class="active" href="homepage.php">SUCCESS THE ULTIMATE DESTINATION</a>
        <a href="myorders.php">My Orders</a>
        <a href="books.php">Books</a>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </nav>
    </div>
    </div>

  </body>

  <div class="small-container">
              <div class="row">
              <?php
          
          while($row=$res->fetch_assoc()){
            $img = $row['image'];
            $name = $row['pr_name'];
            $price = $row['price'];
            $id = $row['pr_id'];
            $imgpath = "Uploads/".$img;
        ?>
        <div class="column">
                <img src="<?php echo $imgpath;  ?>">
                <h4><?php echo $name;  ?></h4> 
            <p> Rs <?php echo $price; ?></p>
            <form action="description.php" method="post">
              <input type="hidden" value ='<?php echo $id; ?>' name="prid"> 
            <button class="btn">BUY &#8594;</button> </form>
                 </div>

              <?php 

          }
          ?>



    </div>
  </div>

    
  </div>
  


</body>

</html>
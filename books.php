<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>BOOKS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- <link rel="stylesheet" href="frontpage.css"> -->
  <style>
    * {
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
    }

    /*added   */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* body {
    font-family: 'Poppins', sans-serif;
}

.navbar {
    display: flex;
    align-items: center;
    padding: 20px;
}

.nav {
    flex: 1;
    text-align: right;
}

nav ul {
    display: inline-block;
    list-style-type: none;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: #555
}

p {
    color: #555;
} */

    .container {
      max-width: 1300px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
    }

    .row {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .col-2 {
      flex-basis: 50%;
      min-width: 300px;
    }

    .col-2 img {
      max-width: 100%;
      padding: 20px 0;
    }

    .col-2 h1 {
      font-size: 50px;
      line-height: 60px;
      margin: 25px 0;
    }

    /* .btn {
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    margin-right: 150px;
}

.btn:hover {
    background-color: black;
} */

    .header {
      background: radial-gradient(#fff, #ffd6d6);
    }

    .header .row {
      margin-top: 70px;
    }

    .categories {
      margin: 100px;
    }

    .col-3 {
      flex-basis: 10%;
      padding: 10px;
      min-width: 100px;
      margin-bottom: 30px;
      transition: transform 0.5s;
    }

    .col-3 img {
      width: 100%;
    }

    .small-container {
      max-width: 1080px;
      margin: auto;
      padding-left: 50px;
      padding-right: 50px;
    }

    .col-4 {
      flex-basis: 10%;
      padding: 10px;
      min-width: 100px;
      margin-bottom: 30px;
      transition: transform 0.5s;
    }

    .col-4 img {
      width: 25%;
    }

    .title {
      text-align: center;
      margin: 0 auto 80px;
      position: relative;
      line-height: 60px;
      color: #555;
    }

    .title::after {
      content: '';
      background: #ff523b;
      width: 80px;
      height: 5px;
      border-radius: 5px;
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }

    h4 {
      color: #555;
      font-weight: normal;
    }

    .col-4 p {
      font-size: 14px;
    }

    .col-4 {
      flex-basis: 30%;
      min-width: 250px;
      margin-bottom: 30px;
    }

    .col-4 img {
      width: 100%;
    }

    .col-4:hover {
      transform: translateY(-15px);
    }

    .col-3:hover {
      transform: translateY(-15px);
    }

    .offer {
      background: radial-gradient(#fff, #ffd6d6);
      margin-top: 30px;
      padding: 30px 0;
    }

    .col-2 .offer-img {
      padding: 70px;
      width: 100%;
    }

    small {
      color: red;
    }

    .logo {
      flex-basis: 60%;
      padding: 5px;
      width: 80px;
    }

    .logo img {
      width: 300px;
      height: 300px;
      cursor: pointer;
    }

    .footer {
      background: #000;
      color: #8a8a8a;
      font-size: 14px;
      padding: 100px 0 20px;
    }

    .footer h3 {
      color: #fff;
      margin-bottom: 20px;
    }

    .footer-col-3,
    .footer-col-4 {
      min-width: 250px;
      margin-bottom: 20px;
    }

    .footer-col-3,
    .footer-col-4 {
      flex-basis: 12%;
      text-align: center;
    }

    /* ul {
    list-style-type: none;
} */

    /* #leftmenu {
    width: 15%;
    height: 100vh;
    border-right: 1px solid black;
} */

    /* .btn2 {
    margin-left: 50px;
    margin-top: 30px;
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    border-radius: 30px;
}

#body {
    display: flex;
    flex-direction: row;
    background: radial-gradient(#fff, #ffd6d6);
    font-size: 32px;
} */

    /* input {
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
} */

    label {
      margin-left: 50px;
    }

    #update-details {
      display: flex;
      flex-direction: row;
    }

    ul li {
      margin-top: 0;
    }

    /*end*/


    body {
      font-family: sans-serif;
      /* overflow: ; */
      user-select: none;
    }

    a:hover,
    a.active {
      color: #23dbdb;
    }

    nav {
      line-height: 70px;
      height: 70px;
      background: #000000;
      box-shadow: 0 3px 15px rgba(0, 0, 0, .4);
    }

    nav ul {
      float: right;
      margin-right: 30px;
    }

    nav ul li {
      display: inline-block;
    }

    nav ul li a {
      color: white;
      display: block;
      padding: 0 15px;
      line-height: 70px;
      font-size: 20px;
      background: #000000;
      transition: .5s;
    }

    nav ul li a:hover,
    nav ul li a.active {
      color: #23dbdb;
    }

    nav ul ul {
      position: absolute;
      top: 85px;
      border-top: 3px solid #23dbdb;
      opacity: 0;
      visibility: hidden;
    }

    nav ul li:hover>ul {
      top: 70px;
      opacity: 1;
      visibility: visible;
      transition: .3s linear;
    }

    nav ul ul li {
      width: 150px;
      display: list-item;
      position: relative;
      border: 1px solid #042331;
      border-top: none;
    }

    nav ul ul li a {
      line-height: 50px;
    }

    nav ul ul ul {
      border-top: none;
    }

    nav ul ul ul li {
      position: relative;
      top: -70px;
      left: 150px;
    }

    nav ul ul li a i {
      margin-left: 45px;
    }

    section {
      background: radial-gradient(#a6f0d3, white);
      height: 100vh;
    }

    .topnav .search-container {
      float: left;
    }

    .topnav input[type=text] {
      padding: 10px;
      width: 350px;
      margin-top: 1%;
      font-size: 15px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 10px 10px;
      margin-top: 1%;
      margin-right: 16px;
      background: #ddd;
      font-size: 9px;
      border-radius: 50%;
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

    .column img {
      transition: transform 0.5s;
    }

    .column img:hover {
      transform: translateY(-15px);
    }
  </style>
</head>

<body>
  <nav>
    <a style="color: white; margin-left: 2%" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <a style="margin-left: 5%" ; href="homepage.php" class="active">SUCCESS THE ULTIMATE DESTINATION</a>
    <ul>
      <li>
        <div class="search-container">
        <form action="search.php" method="post">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>  
      </li>
      <li>
        <a href="#">Categories
          <i class="fas fa-caret-down"></i>
        </a>
        <ul>
          <li><a href="upsc.php">UPSC</a></li>
          <li><a href="neet.php">NEET</a></li>
          <li><a href="jee.php">JEE</a></li>
          <li><a href="nda.php">NDA</a></li>
          <li><a href="rrb.php">RAILWAYS</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-----trending  categories----->
  <div class="categories">
    <div class="small-container">
      <h2 class="title">FIND ALL YOU NEED TO STUDY AT ONE PLACE</h2>
      <div class="row">
          <input type="hidden" value="jee">
          <div class="col-4"><a href="jee.php">
          <img src="img/jee.jpg"></a>
        </div>   
          
        <div class="col-4">
          <input type="hidden" value="upsc"><a href="upsc.php">
          <img src="img/upsc.jpg" width="200" height="220"></a>
        </div>   
          
        <div class="col-4"><a href="neet.php">
          <img src="img/neet.jpg" width="200" height="220"></a>
        </div>   
          
        <div class="col-4">
          <input type="hidden" value="nda"><a href="nda.php">
          <img src="img/nda.jpg" width="200" height="220"></a>
        </div>   
          
        <div class="col-4">
          <input type="hidden" value="rrb"><a href="rrb.php">
          <img src="img/rrb.jpg" width="200" height="220"></a>
        </div> 
        <div class="col-4">
          <input type="hidden" value="rrb"><a href="rrb.php">
          <img src="img/jee.jpg" width="200" height="220"></a>
        </div>
      </div>


    </div>
  </div>

</body>

</html>
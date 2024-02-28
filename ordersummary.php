<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="paymentstyle.css">
    <link rel="stylesheet" href="frontpage.css">
    <link rel="stylesheet" href="Style.css">
    <style>
        
        body{
            background: radial-gradient(#a6f0d3, white);
            display: block;
        }
        input{
    width: 70%;
    border:none;
    outline: none;
    padding: 10px;
    border: 1px solid #999;
    margin-bottom: 15px;
}
.btn {
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
}
    </style>
</head>
<body>
    <div style="margin-left: 100px;">
        <?php
            $conn3 = new mysqli("localhost", "root", "","succ_the_ulti_dest");
            // Check connection
            if ($conn3->connect_error) {
              die("Connection failed: " . $conn3->connect_error);
            }
            $id = $_POST['prid'];
            $que = "SELECT * FROM `succ_the_ulti_dest`.`products` WHERE pr_id='$id';";
            $res = $conn3->query($que);
            $row = $res->fetch_assoc();
            $name = $row['pr_name'];
            $price = $row['price'];
        ?>
        <p style="margin-left: 400px; margin-top: 30px;">Product name: <?php echo $name ?></p>
        <p style="margin-left: 400px; margin-top: 20px;">Rs. <?php echo $price ?></p>
    </div>
    <hr style="border: 2px solid black; margin-top: 20px;">
    <p style="margin-left: 600px; margin-top: 10px;" ><b>Fill Address To Place Order</b></p>
    <div class="container" style="margin-top: 15px;">
        <form action="payment.php" method="post">
        <label for="name">Name: </label>
        <input style="margin-left: 5%;" type="text" placeholder="Enter your name" name="name" required>
        <label for="phno">Phone No:</label>
        <input type="number" placeholder="Enter your phone number" name="phno" required>
        <label for="phno">Address:</label>
        <input style="margin-left: 2%;" type="text" placeholder="Adrres Line 1" name="addr1"><br>
        <input style="margin-left: 21%;" type="text" placeholder="Adrres Line 2" name="addr2"><br>
    </div>
              <input type="hidden" value ='<?php echo $id ?>' name="prid"> 
            <button style="margin-left: 700px;" class="btn">BUY &#8594;</button> 
        </form>
</body>
</html>
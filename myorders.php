<?php
$conn3 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
// Check connection
if ($conn3->connect_error) {
  die("Connection failed: " . $conn3->connect_error);
}
session_start();
$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="men.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400;500,600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <style>
   body{
    background: radial-gradient(#a6f0d3, white);
    }

    table{
        margin-left: 100px;
    }
    
    td{
        padding-left: 70px;
    }
    </style>
</head>
<body>
<nav>
    <a style="color: white; margin-left: 2%" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <a style="margin-left: 5%" ; href="homepage.php" class="active">SUCCESS THE ULTIMATE DESTINATION</a>
  </nav>
        <table>
            <tbody>
            <?php
                $que = "SELECT * FROM `succ_the_ulti_dest`.`customer_details` WHERE ((uname='$uname')&&(status=1));";
                $res = $conn3->query($que);
                while($row = $res->fetch_assoc()){
                    $prid=$row['pr_id'];
                    $o_no=$row['order_no'];
                    $que2 = "SELECT * FROM `succ_the_ulti_dest`.`products` WHERE pr_id = $prid;";
                    $res2 = $conn3->query($que2);
                    $row2 = $res2->fetch_assoc();
                    $img = $row2['image'];
                    $pname = $row2['pr_name'];
                    $price = $row2['price'];
                    $img = "Uploads/" . $img
                ?>
                 <tr>
                <td><img style="height: 150px; width: 150px;" src="<?php echo $img; ?>" alt=""></td>
                <td>Name:<?php echo $pname; ?><br>
                Price:<?php echo $price; ?><br>
                Order No:<?php echo $o_no; ?><br>
                Status:Delivered</td>
            </tr>
                <?php
                }
                
                $que = "SELECT * FROM `succ_the_ulti_dest`.`payment_details` WHERE uname='$uname';";
                $res = $conn3->query($que);
                while($row=$res->fetch_assoc()){
                    $prid = $row['pr_id'];
                    $o_no = $row['order_no'];
                    $tr = $row['trans_no'];
                    $stat = $row['status'];
                    if($stat == 0){
                        $stat = "Order Placed";
                    }
                    
                    elseif($stat==1){
                        $que3 = "SELECT * FROM `succ_the_ulti_dest`.`success_order` WHERE trans_id = $tr;";
                        $res3 = $conn3->query($que3);
                        $row3 = $res3->fetch_assoc();
                        if(mysqli_num_rows($res3)>0){
                            $stat="Delivered";
                        }
                        else{
                        $stat="Order Dispatched";
                        }
                    }
                    $que2 = "SELECT * FROM `succ_the_ulti_dest`.`products` WHERE pr_id = $prid;";
                    $res2 = $conn3->query($que2);
                    $row2 = $res2->fetch_assoc();
                    $img = $row2['image'];
                    $pname = $row2['pr_name'];
                    $price = $row2['price'];
                    $img = "Uploads/" . $img;
            ?>
            <tr>
                <td><img style="height: 150px; width: 150px;" src="<?php echo $img; ?>" alt=""></td>
                <td>Name:<?php echo $pname; ?><br>
                Price:<?php echo $price; ?><br>
                Order No:<?php echo $o_no; ?><br>
                Transaction Id:<?php echo $tr; ?><br>
                Status:<?php echo $stat; ?></td>
            </tr>
            <?php
                }
                ?>
                <hr>
            </tbody>
        </table>
</body>
</html>
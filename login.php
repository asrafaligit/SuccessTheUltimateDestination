<?php extract($_POST);
?>

<!DOCTYPE html>
<html>

<head>
    <title>signin/signup form</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>


    <div id="signin" class="login-form">
        <form action="login.php" method="post">
            <h1>Login Form </h1>
            <div style="display: flex;">
                <div><img style="padding-top: 15px;" class="logimg" src="./img/user_name icon.png" alt="no user img" height="60px" width="50px"></div>
                <div><input type="text " name="txtnameu" placeholder="User Name" required></div>
            </div>
            <div style="display: flex;">
                <div><img style="padding-top: 15px;" class="logimg" src="./img/password icon.png" alt="no user img" height="60px" width="50px"></div>
                <div><input type="password" name="txtpassun" placeholder="Password" required></div>
            </div>
            <button type="submit" name="submit1">Login</button><br><br>
        </form>
        <?php
        $found = false;

        if (isset($_POST['txtpassun'])) {
            $conn3 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
            // Check connection
            if ($conn3->connect_error) {
                die("Connection failed: " . $conn3->connect_error);
            }
            $uname = $_POST['txtnameu'];
            session_start();
            $_SESSION['uname'] = $uname;
            $pass = $_POST['txtpassun'];
            if (($uname == 'admin') && ($pass == 'admin123')) {
                header("Location: adminhome.php");
            }

            $sql3 = "SELECT * FROM login_details";
            $result3 = $conn3->query($sql3);

            while ($row = $result3->fetch_assoc()) {

                if ($row["username"] == $txtnameu &&  $row["password"] == $txtpassun) {
                    $found = true;
                    setcookie('user_name', $row['username']);
                    setcookie('user_email', $row['email']);
                    header("Location:homepage.php");  //redirect
                }
            }
            if ($found == false)
                echo '<p class="db" style="border:solid;border-color:red;padding:4px;"> Invalid Username/Password!!! </p> ';
            $conn3->close();
        }

        ?>
        <span style="color: black;">New Here! <a style="color:blue ;" href="# " onclick="signup() ">Click here</a>
            to sign-up</span>

    </div>
    <div id="signup" class="login-form " style="display:none; ">
        <form action="login.php" method="post">
            <h1>Signup Form </h1>
            <div style="display: flex;">
                <div><img style="padding-top: 19px;" class="logimg" src="./img/name.png" alt="name icon" height="60px" width="50px"></div>
                <div><input type="text " name="name" placeholder="Name"></div>
            </div>
            <div style="display: flex;">
                <div><img style="padding-top: 19px;" class="logimg" src="./img/email.png" alt="email icon" height="60px" width="50px"></div>
                <div><input type="text " name="newemail" placeholder="Email"></div>
            </div>
            <div style="display: flex;">
                <div><img style="padding-top: 15px;" class="logimg" src="./img/user_name icon.png" alt="user icon" height="60px" width="50px"></div>
                <div><input type="text " name="newusername" placeholder="User Name"></div>
            </div>
            <div style="display: flex;">
                <div><img style="padding-top: 15px;" class="logimg" src="./img/password icon.png" alt="pass icon" height="60px" width="50px"></div>
                <div><input type="password" name="password" placeholder="Password"></div>
            </div>
            <div style="display: flex;">
                <div><img style="padding-top: 15px;" class="logimg" src="./img/password icon.png" alt="pass icon" height="60px" width="50px"></div>
                <div><input type="password" name="newpassword" placeholder="Confirm Password"></div>
            </div>
            <button type="submit" name="submit2">Signup</button>
        </form>
        <?php
        $register = false;
        if (isset($_POST['submit2'])) {
            $conn2 = new mysqli("localhost", "root", "", "succ_the_ulti_dest");
            // Check connection
            if ($conn2->connect_error) {
                die("Connection failed: " . $conn2->connect_error);
            }
            $name = $_POST['name'];
            $newusername = $_POST['newusername'];
            $newemail = $_POST['newemail'];
            $newpassword = $_POST['newpassword'];
            $password = $_POST['password'];

            if ($newpassword == $password) {
                $que = "SELECT username FROM `succ_the_ulti_dest`.`login_details` WHERE username = '$newusername';";
                $res = $conn2->query($que);
                $que2 = "SELECT * FROM `succ_the_ulti_dest`.`login_details` WHERE email = '$newemail';";
                $res2 = $conn2->query($que2);
                if(mysqli_num_rows($res)>0){
                    echo "<script>alert('username already exists');</script>";
                }
                elseif(mysqli_num_rows($res2)>0){
                    echo "<script>alert('email already exists');</script>";
                }
                else{
                $sql2 = "INSERT INTO login_details(`email`,`name`,`username`,`password`) VALUES('$newemail','$name','$newusername','$newpassword');";
                if ($conn2->query($sql2) === TRUE) {
                    $register = true;
                    echo '<script>alert("Registration Successfull ! ") </script>';
                } else {
                    echo '<p class="db" style="border:solid;border-color:red;padding:8pt;"> Error in Registration !!! </p> ';

                    $conn2->close();
                }
            }
            } else {
                echo "<script>alert('passwords do not match');</script>";
            }
        }
        ?>
        <br><span style="color: black;">Already have an account! <a style="color: blue;" href="# " onclick="signin() "> Click here
            </a>to sign-in</span>
        </form>
    </div>
    <script>
        function signin() {
            var div = document.getElementById('signin');
            var div2 = document.getElementById('signup');
            div.style.display = "block ";
            div2.style.display = "none ";
        }

        function signup() {
            var div = document.getElementById('signin');
            var div2 = document.getElementById('signup');
            div.style.display = "none ";
            div2.style.display = "block ";
        }
    </script>
</body>

</html>
<?php
session_start();

include('../php-connection/Connection.php');
include('../php-connection/function.php');




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    if (!empty($user_name) && !empty($password)) {

        //save to database
        $user_id = random_num(20);
        $query = "INSERT into login_tbl (account_type,user_name, password, Confirm_password) values ('$user_id','$user_name','$password','$CPassword ')";

        mysqli_query($con, $query);

        header("Location: ../php/login.php");

        die;
    } else {
        echo '<div class="text">Please enter some valid information!"</div>';
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
    <link rel="stylesheet" href="../css/logReg.css">
</head>

<body>
    <div class="Container">
        <form action="" method="post">

            <h2> Register here </h2>
            <div class="form-group">
                <label for="">Email: </label>
                <input type="text" class="input" placeholder="Email" name="user_name">


            </div>

            <div class="form-group">
                <label for="">Password: </label>
                <input type="password" class="input" placeholder="password " name="password">

            </div>

            <div class="form-group">
                <label for="">Confirm Password: </label>
                <input type="password" class="input" placeholder="confirm password" name="Confirm_password">

            </div>


            <div class="form-group">

                <button type="submit" value="login" class="btn"> Login</button>
                <h5>
                    <h5 class="pass">Don't have an account? <a href="../php/login.php" class="link">Login</a>
                    </h5>
                    <div class="forget"><a href="./Forget.php" class="link1">Forget password</a></div>
            </div>


        </form>
    </div>
</body>

</html>
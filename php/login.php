<?php
session_start();

$email = $password = "";
$emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["user_name"])) {
        $emailErr = "Email is required!";
    } else {
        $email = $_POST["user_name"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required!";
    } else {
        $password = $_POST["password"];
    }

    if ($email && $password) {
        include("../php-connection/Connection.php");
        include("../php-connection/function.php");

        $User_name = $_POST['user_name'];
        $password = $_POST['password'];
        //read from database

        $query = "SELECT * from login_tbl where user_name = '$User_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['account_type'] = $user_data['account_type'];
                    header("Location: ../Project/index.php");
                    die;
                }
            }
        }

        echo "<p class='styled-text'>wrong username or password!</p>";
    } else {
        echo "<p class='styled-text'>wrong username or password!</p>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form </title>
    <link rel="stylesheet" href="../css/logReg.css">
</head>

<body>
    <div class="Container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <h2> Login </h2>
            <div class="form-group">
                <label for="">Enter User-name: </label>
                <input type="text" class="input" placeholder="Enter Username " name="user_name">

                <span class="error"><br><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label for="">Enter Password: </label>
                <input type="password" class="input" placeholder="Enter Username " name="password">
                <span class="error"><br><?php echo $passwordErr; ?></span>
            </div>


            <div class="form-group">

                <button type="submit" value="login" class="btn"> Login</button>
                <h5>
                    <h5 class="pass">Don't have an account? <a href="../php/Register.php" class="link">Create Account</a>
                    </h5>
                    <div class="forget"><a href="./Forget.php" class="link1">Forget password</a></div>
            </div>


        </form>
    </div>
</body>

</html>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business permit</title>
    <link rel="stylesheet" href="../Css/all.min.css">
    <link rel="stylesheet" href="../Css/fontawesome.min.css">
    <link rel="stylesheet" href="../Css-view/view.css">
    <link rel="stylesheet" href="../Css/sidebar.css">
</head>

<body>


    <div class="navigation-bar">
        <nav>
            <?php
            include('../Project/sidebar.php');
            ?>
        </nav>
    </div>


    <div class="body-content">
        <p> Resident Certificate
            <button class="btn add-new-btn"> add new</button>
        </p>

        <?php
        if (isset($_SESSION['status'])) {
            echo "<h1>" . $_SESSION['status'] . "<h1>";
            unset($_SESSION['status']);
        }
        ?>

        <div class="Model-container">
            <div class="model-content">
                <a class="window-close" href="">close</a>
                <h2>Create business permit</h2>
                <br>

                <div>
                    <form action="../view/view.php" method="post">
                        <form-group>
                            <label for="">business Name :</label>
                            <input type="text" placeholder="Enter of the Business Name" name="BName">
                        </form-group>
                        <br>
                        <br>
                        <form-group>
                            <label for="">business Owner :</label>
                            <input type="text" placeholder="Enter of the  Owner Name" name="OwName">
                            <br>
                            <br>
                            <input type="text" placeholder="Enter of the  Owner Name" name="OwName1">
                        </form-group>
                        <br>
                        <br>
                        <form-group>
                            <label for="">business Nature :</label>
                            <input type="text" placeholder="Sari-sari Store/water Refill Station" name="BNature">
                        </form-group>
                        <br>
                        <br>
                        <form-group>
                            <label for="">Date application Nature</label>
                            <input type="Date" name="DateName">
                        </form-group>
                        <br>
                        <br>
                        <input id="Btn-submit" type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="../js/sidebar.js"></script>
    <script src="../js/Close.js"></script>
</body>

</html>
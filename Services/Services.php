<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../Css/all.min.css">
    <link rel="stylesheet" href="../Css/fontawesome.min.css">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/sidebar.css">
    <link rel="stylesheet" href="../Css/Dashboard.css">
    <link rel="stylesheet" href="../Css/Services.css">
</head>

<body>
    <div class="navigation-bar">
        <nav>
            <?php
            include('../Project/sidebar.php');
            ?>
        </nav>
    </div>


    <div class="Main-content">
        <h1>Services</h1>
        <p>online Document offered</p>
    </div>


    <div class="container-box">
        <?php
        include('../Project/Container.php');
        ?>
    </div>


    <script>
        const navBar = document.querySelector("nav");
        menuBtns = document.querySelectorAll(".menu-icon");
        overlay = document.querySelector("overlay");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });
        });
    </script>
</body>

</html>
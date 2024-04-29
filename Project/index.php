<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Css/all.min.css">
    <link rel="stylesheet" href="../Css/fontawesome.min.css">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/sidebar.css">
    <link rel="stylesheet" href="../Css/Dashboard.css">

</head>

<body>

    <div class="navigation-bar">
        <nav>
            <?php
            include('sidebar.php');
            ?>
        </nav>
    </div>


    <div class="main-content">
        <?php
        include('../Services/Dashboard.php');
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
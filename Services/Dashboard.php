<head>

    <link rel="stylesheet" href="../Css/Dashboard.css">
    <link rel="stylesheet" href="../Css/header.css">
</head>

<body>


    <div class="navigation-bar">
        <nav>
            <?php
            include('../Project/sidebar.php');
            ?>
        </nav>
    </div>


    <div class="Content">
        <div class="title">
            <h1>Dash Board</h1>
            <p>list of Barangay Official</p>
        </div>


        <div class="Content-card">
            <div class="card1">
                <img src="../image/Male-user.png" alt="">
                <h1>Barangay Captain</h1>
                <p>Name: Cj Tanedo</p>
            </div>
        </div>

        <div class="Content-card1">
            <div class="card2">
                <img src="../image/Female-user.png" alt="">
                <h1> Treasurer </h1>
                <p>Name: Lexi lore</p>
            </div>
        </div>


        <div class="Content-card2">
            <div class="card3">
                <img src="../image/Female-user.png" alt="">
                <h1> Secretary </h1>
                <p>Name: Mia Khalifa</p>
            </div>
        </div>



        <!-- Barangay kagawad -->

        <div class="title2">
            <h1>Baragay Kagawad</h1>
        </div>

        <div class="Content-card3">
            <div class="card3">
                <img src="../image/Female-user.png" alt="">
                <h1> barangay Kagawad </h1>
                <p>Name: Lexi luna</p>
            </div>
        </div>


        <div class="Content-card4">
            <div class="card2">
                <img src="../image/Male-user.png" alt="">
                <h1> barangay Kagawad </h1>
                <p>Name: johnny sins</p>
            </div>
        </div>


        <div class="Content-card5">
            <div class="card2">
                <img src="../image/Female-user.png" alt="">
                <h1> barangay Kagawad </h1>
                <p>Name: Luna paul </p>
            </div>
        </div>


        <div class="Content-card6">
            <div class="card2">
                <img src="../image/Male-user.png" alt="">
                <h1> barangay Kagawad </h1>
                <p>Name: jorgie </p>
            </div>
        </div>


        <div class="Content-card7">
            <div class="card2">
                <img src="../image/Female-user.png" alt="">
                <h1> barangay Kagawad </h1>
                <p>Name: kelly </p>
            </div>
        </div>


        <div class="Content-card8">
            <div class="card2">
                <img src="../image/Male-user.png" alt="">
                <h1> barangay Kagawad </h1>
                <p>Name: Georgie </p>
            </div>
        </div>



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
<?php
session_start();

include('../php-connection/Connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $BName = $_POST['BName'];
    $OwnName = $_POST['OwName'];
    $OwnName1 = $_POST['OwName1'];
    $BNature = $_POST['BNature'];
    $dob = $_POST['DateName'];



    $query2 = mysqli_query($con, "INSERT INTO permit_tbl (BName,OwName,OwName1,BNature,DateName) Values 
    ('$BName',' $OwnName ', '$OwnName1', '$BNature', ' $dob ')");

    if ($query2) {
        echo "<script> alert(data inserted successfully)</script> ";
    } else {
        echo "<script> alert(there is an error )</script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business permit</title>
    <link rel="stylesheet" href="../Css/all.min.css">
    <link rel="stylesheet" href="../Css/fontawesome.min.css">
    <link rel="stylesheet" href="../Css-view/table.css">
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
        <p>Resident Certificate
            <button class="btn add-new-btn"> add new</button>
        </p>

        <div class="table-content">

            <table class="table-list">
                <tr>
                    <th>Business name </th>
                    <th>Owner-name </th>
                    <th>Owner-Old</th>
                    <th>Business Nature </th>
                    <th>Date- application Nature</th>
                </tr>

                <?php



                $query2 = "SELECT * FROM permit_tbl  ";

                $result1 = mysqli_query($con, $query2);

                if (mysqli_num_rows($result1) > 0) {

                    foreach ($result1 as $row) {

                ?>


                        <tr>
                            <td class="row"><?= $row['BName']; ?></td>
                            <td class="row"><?= $row['OwName']; ?></td>
                            <td class="row"><?= $row['OwName1']; ?></td>
                            <td class="row"><?= $row['BNature']; ?></td>
                            <td class="row"><?= $row['DateName']; ?></td>
                        </tr>



                <?php
                    }
                } else {
                    echo 'no record found';
                }


                ?>
                </tbody>



            </table>
        </div>


        <div class="Model-container">
            <div class="model-content">
                <?php
                include('../Services/model-content.php');
                ?>
            </div>
        </div>





        <script src="../js/sidebar.js"></script>
        <script src="../js/Closebar.js"></script>
</body>

</html>
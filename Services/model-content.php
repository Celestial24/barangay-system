<head>
    <link rel="stylesheet" href="../Css-view/view.css">
</head>
<a class="window-close" href="">close</a>
<h2>Create business permit</h2>
<br>

<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="">business Name :</label>
        <input type="text" placeholder="Enter of the Business Name" name="BName">

        <br>
        <br>

        <label for="">business Owner :</label>
        <input type="text" placeholder="Enter of the  Owner Name" name="OwName">
        <br>
        <br>
        <input type="text" placeholder="Enter of the  Owner Name" name="OwName1">

        <br>
        <br>

        <label for="">business Nature :</label>
        <input type="text" placeholder="Sari-sari Store/water Refill Station" name="BNature">

        <br>
        <br>
        <form-group>
            <label for="">Date application Nature</label>
            <input type="Date" name="DateName" >
        </form-group>
        <br>
        <br>
        <input id="Btn-submit" type="submit" value="submit">
    </form>
</div>
</div>
<script src="../js/Close.js"></script>
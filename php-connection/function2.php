<?php

function check_login($con)
{

    if (isset($_SESSION['account_user'])) {

        $id = $_SESSION['account_user'];
        $query2 = "SELECT * from permit_tbl where account_user = '$id' limit 1";

        $result = mysqli_query($con, $query2);
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
   
    die;
}

function random_num($length)
{

    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        # code...

        $text .= rand(0, 9);
    }

    return $text;
}

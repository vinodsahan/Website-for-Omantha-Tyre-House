<?php
include('../core.php');
if ($_POST) {
    $out = "";

    $email = $_POST['username'];
    $password = $_POST['password'];

    $chkmail = $connect->query("SELECT * FROM `user` WHERE `Email` = '$email'");
    if ($chkmail->num_rows == 1) {

        $mainSql = $connect->query("SELECT * FROM user WHERE Email = '$email' AND password = '$password'");
        if ($mainSql->num_rows == 1) {
            $value = $mainSql->fetch_assoc();
            $_SESSION['userId'] = $value['id'];
            $_SESSION['Type'] = $value['type'];
            $_SESSION['Active'] = $value['active'];
            header('location: ../../index.php');
        } else {
            $out = "password is incorrect";
        }
    } else {
        $out = "email is not in system";
    }
}
echo ($out);

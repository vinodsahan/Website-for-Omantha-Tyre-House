<?php
//adduser.php
include('../core.php');
if ($_POST) {
    $out = "";
    $name = $_POST['userNameTxt'];
    $email = $_POST['emailTxt'];
    $password = $_POST['PasswordTxt'];
    $today =  date('Y-m-d');
    $activecode = rand(1000, 10000);

    $chkmail = $connect->query("SELECT * FROM `user` WHERE `Email` = '$email'");
    if ($chkmail->num_rows == 0) {
        $sql = $connect->query("INSERT INTO `user` (`id`, `Name`, `Email`, `Password`, `type`, `active`, `activecode`, `regdate`) VALUES (NULL, '$name', '$email', '$password', 'normal', 'Non', '$activecode', '$today');");
        if ($sql === true) {
            $out = '<br><br>done  ';
            $mainSql = $connect->query("SELECT * FROM user WHERE Email = '$email' AND password = '$password'");
            if ($mainSql->num_rows == 1) {
                $value = $mainSql->fetch_assoc();
                $_SESSION['userId'] = $value['id'];
                $_SESSION['Type'] = $value['type'];
                $_SESSION['Active'] = $value['active'];
            }
        } else {
            $out = 'false';
        }
    } else {
        $out = "<br><br>This e-mail already has taken!!";
    }

    echo ($out);
}

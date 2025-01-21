<?php
require_once('config.php');
if (isset($_POST['btn-save'])) {
    $UserName = mysqli_real_escape_string($con, $_POST['UserName']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);
    $CPassword = mysqli_real_escape_string($con, $_POST['Cpass']);

    if (empty($UserName) || empty($Email) || empty($Password) || empty($CPassword)) {
        echo 'Please fill in the blanks';
    }
    if ($Password != $CPassword) {
        echo 'Password not Matched!!';
    } else {
        $Pass = md5($Password);
        $sql = "insert into users (UName,Email,Password) values('$UserName','$Email',' $Pass')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo 'Your Record has been Saved in the database ';
        } else {
            echo 'Please check your Query  ';
        }
    }
}

<?php
//submitorder
include('BackEnd/core.php');
if (loginverify() == false) {
    if ($_SESSION['Active'] == 'Non') {
        header('location: active.php');
    } else {
        header('location: login.php');
    }
}
require_once './Includes/header.php' ?>
<h1>Submit Order</h1>

<?php require_once './Includes/footer.php' ?>
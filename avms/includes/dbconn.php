<?php
    $con=mysqli_connect("localhost", "root", "", "avms_db");
    if(mysqli_connect_errno()){
        echo "DB Connection Failed!".mysqli_connect_error();
    }
  ?>
<?php

// db connection
$con =mysqli_connect('localhost', 'root', '', '');
// check connection
if (!$con) {
  echo 'Plesase check Database your connection';
}

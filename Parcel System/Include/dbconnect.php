<?php

$databaseconnction = mysqli_connect("localhost", "root", "", "parcel_system")
    or die("Unable connect to database");
mysqli_set_charset($databaseconnction, "utf-8");

?>
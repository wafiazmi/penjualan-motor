<?php

$con = mysqli_connect("localhost","root","","penjualan_motor");

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
?>
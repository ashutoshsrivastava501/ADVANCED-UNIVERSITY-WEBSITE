<?php

//connecting to the database
$conn=mysqli_connect("localhost","root","","adminlogin_table");

//create a db
$sql="CREATE DATABASE adminlogin_table";
$result=mysqli_query($conn,$sql);

?>
<?php

   $serverName = "localhost";
   $userName = "root";
   $password = "";
   $dbName = "webproject";

   $conn = mysqli_connect($serverName,$userName,$password,$dbName);

   if(!$conn){
    die("Connection Faield !!".mysqli_connect_error());
   }

   else{
    //echo "<script>alert('Database Connected !!')</script>";
   }
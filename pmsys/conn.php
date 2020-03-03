<?php
   $dbsname="localhost";
   $dbuname="root";
   $dbpwd="GoodDatabase5";
   $db = mysqli_connect($dbsname,$dbuname,$dbpwd);
   if(!$db){
      die("connection failed".mysqli_connect_error());
   }
<?php 
    //connect to mysql
    $con = mysqli_connect("localhost","root","qwertyuiop","shoutit");



    //test  connection
     if(!$con){
         echo 'Failed to connect to MySQL: ' .mysqli_connect_error();
     }

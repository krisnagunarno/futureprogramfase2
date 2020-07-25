<?php
    $hostname  = getenv('HOSTNAME');
    $username  = getenv('USERNAME');
    $password  = getenv('PASSWORD');
    $dbname  = getenv('DBNAME');

#    $hostname  = "192.168.56.108:3306";
#    $username  = "futureprogram";
#    $password  = "Future4-0";
#    $dbname  = "crud_laundry";


    $conn = mysqli_connect($hostname, $username, $password, $dbname);    
?>

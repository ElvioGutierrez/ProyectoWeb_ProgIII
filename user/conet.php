<?php
    $dbahost= "127.0.0.1";
    $dbauser= "root";
    $dbapassword= "";
    $dbadatabase= "basededatos";
    
    $conn = mysqli_connect($dbahost,$dbauser, $dbapassword, $dbadatabase);
    if(!$conn){
        die('no hay conexion:'.mysqli_connect_error());

    }
?>
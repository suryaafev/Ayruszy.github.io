<?php
    $server = "localhost"; //xampp
    $user = "root"; //selalu root
    $password = ""; 
    $db_name = "posttest4";

    $conn = mysqli_connect ($server, $user, $password, $db_name);

    if (!$conn){
        die ("Gagal Terhubung Ke Database : ". mysqli_connect_error());
    }
    else {
        echo"Databese Berhasil Terhubung!!! ";
    }
?>
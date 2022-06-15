<?php

    //connect ke data base
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "kansai_db";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        echo "koneksi ke database hilang";
    }

?>
<?php
    // $host = "localhost",
    // $user = "chohena",
    // $pw = "Hanmida77!",
    // $db = "chohena",
    // $connect = new mysqli($host, $user, $pw, $db);
    // $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect false";
    // } else {
    //     echo "Database Connect true";
    // }
?> 

<?php
    //phpinfo();
    $host = "localhost";
    $user = "root";
    $pw = "root";
    $db = "phpClass";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect true";
    }
?>
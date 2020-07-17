<?php
session_start();

$conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'feelrait',
    );
    /*
    if(isset($conn)){
        echo 'La base de datos está conectada';
    }
    */
?>
<?php 


$connection = mysqli_connect( 
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']);

if ( $connection == false) {
    echo 'Не удалось подключиться к Базе Данных!';
    echo mysqli_connect_error();
    exit();
} 


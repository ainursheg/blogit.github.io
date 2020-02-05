<?php

// Соединение с СУБД 

// mysqli_connect('адрес сервера', 'имя пользователя', 'пароль', 'Название базы данных')

$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db');

// Проверка соединения с СУБД

if ( $connection == false) {
    echo 'Не удалось подключиться к Базе Данных!';
    echo mysqli_connect_error();
    exit();
} 
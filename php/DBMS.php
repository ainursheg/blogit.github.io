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

// Работа с БД

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`;");

if ( mysqli_num_rows($result) == false) {
    echo 'Категорий не найдено!';
} else {
    ?>

<ul>
    <?php

    while ( ($categories = mysqli_fetch_assoc($result)) ) {
        $article_count = mysqli_query($connection, "SELECT COUNT('id') AS 'total_count' FROM `articles` WHERE `articles_categories_id` = " . 
        $categories['id']);
        $article_count_result = mysqli_fetch_assoc($article_count);
        echo '<li>' . $categories['title'] . ' (' . $article_count_result['total_count'] . ')' . '</li>';
    }

    ?>
</ul>

<?php 
}

mysqli_close($connection);

?>
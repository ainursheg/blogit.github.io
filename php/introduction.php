<?php 


// Про кавычки - 
// Одиночные кавычки превращают весь текст содержащийся в них в текст (апострофы)
// Двойные читают код написанный в них (кавычки)
// В тех местах где код не применяется лучше использовать апострофы для большей производительсности

//////////////////////////////////////
// Переменные


$a = 100; // Число - integer, int
$b = 14.47; // Дробь - float
$c = 'How do you do?'; // Строка - string, str
$d = "How do u do?"; // Строка - string, str
$e = array(1, 2, 3, 4, 5); // Массив - array
$f = array( // Ассоциативный массив
    'name' => 'Ainur',
    'surname' => 'Gabdnurov',
    'age' => 18,
    'byear' => 2001,
    'education' => array('school in 2019', 'Nothing in life') // Многомерный массив - array
);

$g = false; // Булево значение/ булев тип - boolean, bool

// echo $d . ' ' . $c;
// Конкатенация (Соединение) - вызывается через оператор ' . ' (точка)
// Соединение можно применять как в самом коде, так и переменных 
// $ass = 0 . X 
// или
// $ass .= X


echo (' Математические операторы <br> <br>');
////////////////////////////
// Математические операторы

// ' + ' - Сложение
// ' - ' - Вычитание
// ' * ' - Умножение
// ' / ' - Деление 
// ' % ' - Деление по модулю (помогает определить четность/ нечетность числа)

echo 5 + 5 . "<br/>" ;// Сложение
echo 50 - 15 . "<br/>"; // Вычитание 
echo 50 * 300 . "<br/>";// Умножение
echo 6000 / 500 . "<br/>";// Деление
echo 90 % 2  . "<br/>"; // Модуль

echo '<hr>';

echo '<br> Условия <br><br> ';
////////////////////////////
// Условия

// Условие задается командой if
// if ( condition ) { code (what command should do)}
// если ( условие ) { код ( что команда должна сделать)}
// В условии валидность условия проверяется двойным знаком равно ' == ' 
// ( поскольку единичный знак ' = ' присваивает переменной новое значение )




$weather = 'снег'; // снег, дождь, облачно, ясно

if ( $weather == 'снег') {
    echo (' Погода плохая, советую никуда не ехать, сэр.');
}

if ( $weather == 'дождь') {
    echo (' Погода не очень, советую никуда не ехать, сэр.');
}

if ( $weather == 'облачно') {
    echo (' Погода нормальная, но вероятность осадков повышена, ехать можно, но будьте осторожны, сэр.');
}

if ( $weather == 'ясно') {
    echo (' Погода отличная, доброго пути, сэр.');
}


// В условии есть и другие значения, например: else и else if
// Кроме " == " существуют другие операторы
// ' < ' - меньше
// ' > ' - больше
// ' <= ' - меньше-равно
// ' >= ' - больше-равно
// ' != ' - неравно
// а также or ( || ) и and ( && )

echo "<br><br>";

$name = 'Ainur';
$age = 18;

if ( $age < 21 and $name != 'Ainur') {
    echo ' Вы слишком малы, чтобы зайти на данный сайт.';
} else { 
    echo ' Привет! Добро пожаловать назад!';
}

echo "<hr> <br> Циклы  <br>";
//////////////////////////
// Циклы 

// for
// while 
// foreach

// Примеры

// for ( переменные; условия; изменение переменных) { код цикла }
// while ( условие ) { блок кода }
// foreach ( массив как переменная ) { код }


for ( $i = 1; $i <= 10; $i++) {
    echo $i;

    if ( $i % 2 == 0 ) {
        echo ' - Четное число.';
    } else {
        echo ' - Нечетное число.';
    }

    echo "<br>";
}

echo "<br>";

$test = 10;
while( $test <= 15 ) {
    echo " Число: $test <br>";
    $test++;
}

echo '<br>';

$names = array(
    'Johny',
    'Casey',
    'Sonya',
    'Sam'
);

foreach ( $names as $value ) {
    echo $value . '<br>';
}

$numbers = array(
    5,
    25,
    50,
    100
);

foreach ( $numbers as $num ) {
    echo 'Куб числа ' . $num . ': ' . ($num * $num * $num) . '<br>' ;
}

echo '<hr> <br> Функции <br> <br>';

//////////////////////////
// Функции 

// function имя(аргументы) { блок кода }
//
//

function myFunction() {
    echo 'Функция исполнена! <br> <br>';
}

myFunction();

function getBigger($a , $b) {
    if ( $a > $b ) {
        return 'Число ' . $a . ' больше чем ' . $b . '<br>'; 
    } else if ( $a < $b ) {
        return 'Число ' . $b . ' больше чем ' . $a . '<br>';
    } else {
        return 'Числа равны <br>';
    }

}

$bigger = getBigger(20, 10);
$bigger1 = getBigger(5, 30);
$bigger2 = getBigger(50, 50);

echo $bigger;
echo $bigger1;
echo $bigger2;

// Математические функции

// abs - абсолютное число
// round - округление числа
// ceil - округление в большую сторону
// floor - округление в меньшую сторону
// rand (диапозон переменной) - случайное число (random) 
// min - возвращает самое маленькое число из данных переменных 
// max - возвращает самое большое число


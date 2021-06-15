<?php
//Константы
define("HEAR",     "I love PHP");
echo '<p>'.HEAR.'</p>';

//Предопределённые константы
echo '<p>'.PHP_VERSION.'</p>';
echo '<p>'.PHP_MAJOR_VERSION.'</p>';
echo '<p>'.PHP_MINOR_VERSION.'</p>';
echo '<p>'.PHP_RELEASE_VERSION.'</p>';
//Существуют и многие другие...

//Магические константы
echo '<p>'.__LINE__.'</p>'; //Текущий номер строки в файле
echo '<p>'.__FILE__.'</p>'; //Полный путь и имя текущего файла
//Существуют и многие другие...
?>
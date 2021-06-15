<?php
//Переменные извне
//Ловим то, что вводили в html файле.
echo '<p>'.$_POST['username'].'</p>';
echo '<p>'.$_REQUEST['username'].'</p>';
echo '<p>'.$_POST['email'].'</p>';
echo '<p>'.$_REQUEST['email'].'</p>';

//COOKIE
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
} else {
    $count = 1;
}
?>
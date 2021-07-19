<?php
//break
//Общее
$reslist = array(1, 2, 3, 4, 5, 6);
foreach ($reslist as $id) {
    if ($id == 3) {
        break; //Тут можно было написать 'break 1;'.
    }
    print '<p>'.$id.'</p>';
}
//Использование дополнительного аргумента
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "Итерация 5<br/>";
            break 1;  /* Выйти только из конструкции switch. */
        case 10:
            echo "Итерация 10<br/>";
            break 2;  /* Выходим из конструкции switch и из цикла while. */
        default:
            break;
    }
}
?>
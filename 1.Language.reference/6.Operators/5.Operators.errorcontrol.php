<?php
//Оператор управления ошибками 
//Общее - этот оператор @ подавляет ошибки, а не устраняет
$a = 1;
$b = 'cat';
echo '<p>'.@($a + $b).'</p>'; //Такой код должен выдать ошибку!
echo '<p>'.($a + $b).'</p>';  //Вот ошибка!
?>
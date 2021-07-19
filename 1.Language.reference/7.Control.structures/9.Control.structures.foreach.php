<?php
//foreach
//Общее
$reslist = array(901,902,903);
$LNG = array(
    901 => 'Met',
    902 => 'Krist',
    903 => 'Det',
);
//1. Только значение
foreach($reslist as $id){
    echo '<p>'.$LNG[$id].'</p>';
} 
//2. Ключ и значение
foreach($reslist as $id_mas => $id){
    echo '<p>'.$reslist[$id_mas].' ('.$LNG[$id].')</p>';
}
?>
<?php
//Операторы, работающие с массивами
//Общее
$build = array(
    1 => 'Рудник металла',
    2 => 'Рудник кристалла',
    3 => 'Рудник дейтерия',

);
$defense = array(
    201 => 'Ракетная установка',
    202 => 'Лазерная установка',
    203 => 'Тяжелый лазер',
);
//1. Объеденение
$control = $build + $defense;
print '<p> $control = $build + $defense </p>';
var_dump($control);

$build += $defense;
print '<p> $build +=$defense </p>';
var_dump($build);

$defense +=$build;
print '<p> $defense +=$build </p>';
var_dump($defense);

//2. Равно
$defens = $build;
if($build = $defense){
    echo '<p> $build = $defense </p>';
}

$build = $defense;
if($build = $defense){
    echo '<p> $build = $defense </p>';
}
//3. Тождественно равно
$defens = $build;
if($build = $defense){
    echo '<p> $build = $defense </p>';
}

$build = $defense;
if($build = $defense){
    echo '<p> $build = $defense </p>';
}
//4. Не равно
if($build <> $defense){
    echo '<p> $buld <> $defense </p>';
}

if($build != $defense){
    echo '<p> $buld <> $defense </p>';
}
//5. Тождественно не равно
if($build !== $defense){
    echo '<p> $buld !== $defense </p>';
}
?>
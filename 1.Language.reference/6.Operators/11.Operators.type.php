<?php
//Оператор проверки типа 
//1. Использование instanceof с классами
class ClassUser {}
class classUserNot {}

$a = new ClassUser;

print '<p>#1</p>';
var_dump($a instanceof ClassUser);
var_dump($a instanceof classUserNot);

//2. Использование instanceof с наследуемыми классами
class ParentUser {}
class ClassUser2 extends ParentUser {}

$a = new ClassUser2;

print '<p>#2</p>';
var_dump($a instanceof ClassUser2);
var_dump($a instanceof ParentUser);

//3. Использование instanceof для проверки того, что объект не является экземпляром класса
class ClassStandart {}
class MyClass {}

$a = new MyClass;

print '<p>#3</p>';
var_dump(!($a instanceof ClassStandart))
?>
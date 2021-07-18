<?php
//Оператор присваивания
//Общее
$a = ($b = 4) + 5;
echo '<p>'.$a.'</p>';
echo '<p>'.$b.'</p>';

//Более подробный пример
$a = 3;
$a += 5; //Устанавливает $a в 8, как если бы мы написали: $a = $a + 5;
echo '</p>'.$a.'<p>';

$b = "PHP";
$b .= "+JS"; //Устанавливает $b в "PHP+JS"
echo '</p>'.$b.'<p>';

$b = 'HTML';
$b = 'CSS'; //Устанавливает $b в "CSS"
echo '<p>'.$b.'</p>';

//Присваивание по ссылке
$a = 3;
$b = &$a; //$b - это ссылка на $a

echo '<p>'.$a.'</p>';//Печатает 3
echo '<p>'.$b.'</p>';//Печатает 3

$a = 4; //Меняем $a

echo '<p>'.$a.'</p>';//Печатает 4
echo '<p>'.$b.'</p>';//Печатает 4

class total{
    //Операторы арифметического присваивания (Пример@Эквивалент)
    //1. Сложение
    static function sum_example($a,$b){
        return $a += $b;
    }
    
    static function sum_equivalent($a,$b){
        return $a = $a + $b;
    }
    //2. Вычитание
    static function sub_example($a,$b){
        return $a -= $b;
    }
    
    static function sub_equivalent($a,$b){
        return $a = $a - $b;
    }
    //3. Умножение
    static function mult_example($a,$b){
        return $a *= $b;
    }
    
    static function mult_equivalent($a,$b){
        return $a = $a * $b;
    }
    //4. Деление
    static function div_example($a,$b){
        return $a /= $b;
    }
    
    static function div_equivalent($a,$b){
        return $a = $a / $b;
    }
    //5. Модуль
    static function mod_example($a,$b){
        return $a %= $b;
    }
    
    static function mod_equivalent($a,$b){
        return $a = $a % $b;
    }
    //6. Возведение в степень
    static function pow_example($a,$b){
        return $a **= $b;
    }
    
    static function pow_equivalent($a,$b){
        return $a = $a ** $b;
    }
}
//1. Сложение - вывод
echo '<p>'.total::sum_example(1,0).'</p>';
echo '<p>'.total::sum_equivalent(1,0).'</p>';
//2. Вычитание - вывод
echo '<p>'.total::sub_example(3,1).'</p>';
echo '<p>'.total::sub_equivalent(3,1).'</p>';
//3. Умножение - вывод 
echo '<p>'.total::mult_example(1.5,2).'</p>';
echo '<p>'.total::mult_equivalent(1.5,2).'</p>';
//4. Деление - вывод 
echo '<p>'.total::div_example(4,2).'</p>';
echo '<p>'.total::div_equivalent(4,2).'</p>';
//5. Модуль - вывод
echo '<p>'.total::mod_example(105,10).'</p>';
echo '<p>'.total::mod_equivalent(105,10).'</p>';
//6. Возведение в степень - вывод
echo '<p>'.total::pow_example(3,2).'</p>';
echo '<p>'.total::pow_equivalent(3,2).'</p>'
?>
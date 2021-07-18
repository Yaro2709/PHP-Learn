<?php
//Общее
//Альтернативный синтаксис управляющих структур
//Пример 1
$a = 5;
?>
<?php if($a == 5): ?>
___A = 5___
<?php endif; ?>

<?php
//Пример 2
if($a == 5):
    echo '$a ';
    echo '== ';
    echo '5';
elseif($a == 6):
    echo '$a == ';
    echo '6';
else:
    echo 'not';
endif;
?>
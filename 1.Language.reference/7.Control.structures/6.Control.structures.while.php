<?php
//while 
//Пример 1
$i = 1;
while($i <= 10){
    echo '<p>'.$i.'</p>';
    echo $i += mt_rand(1,3);
}
?>
<br><br><br>
<?php
//Пример 2
$i = 1;
while ($i <= 10):
    echo '<p>'.$i.'</p>';;
    $i++;
endwhile;
?>

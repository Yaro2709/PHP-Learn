<?php
class factor{
    static function calculator($factor,$price){
        $total = $factor * $price;
        return $total;
    }    
}
$total = factor::calculator($factor,$price);
echo '<p>'.$total.'</p>';
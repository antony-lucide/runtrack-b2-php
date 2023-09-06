<?php 
 function multiple(int $diviseur, int $multiplicateur): bool{
    if($multiplicateur % $diviseur == 0){
        echo "divisable";
        return true;
    }
    else{
        echo "non divisable";
        return false;
    }
 }
 multiple(2,9)

?>
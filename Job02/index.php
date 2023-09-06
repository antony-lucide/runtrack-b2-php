<?php 
function my_str_reverse(string $char): string{
    $longueur = 0;
    for($i = 0;  ;$i++){
        if(isset($char{$i}) == false){
            break;
        }
        $longueur++;
    }
    echo $longueur;
    for ($i = $longueur -1; $i >= 0; $i--){
        echo $char[$i];
    }
}
 my_str_reverse("Hello");
?>
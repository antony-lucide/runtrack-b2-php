<?php 
    function my_str_search( string $needle, string $haystack): int{
        $compteur = 0;
        for ($i = 0; ;$i++){
            if(isset($haystack{$i}) == false){
                break;
            }
            if($needle == $haystack[$i]){
                $compteur++;
            }
        }
        return $compteur;
    }

echo countstring("o","bonjour");
?>

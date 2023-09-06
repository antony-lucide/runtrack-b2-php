<?php 
    function countstring( string $needle, string $haystack): int{
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
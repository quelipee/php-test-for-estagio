<?php 

function getString(string $string) : void {
    $stringToLower = strtolower($string);

    $count_string = substr_count($stringToLower, 'a');

    if ($count_string > 0) {
        echo "a quantidade de 'a' que possui na palavra `$string` é de `$count_string`"; 
    }else{
        echo "a letra 'a' não possui na palavra `$string`";
    }
}

$string = 'bom dia';
getString($string);

?>
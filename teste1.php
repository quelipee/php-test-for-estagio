<?php
    function Finabonacci(int $number) : array {
        $finabonacci = [0,1];

        while (true) {
            $next = $finabonacci[count($finabonacci) - 1] + $finabonacci[count($finabonacci) - 2];
            if($next > $number)break;
            $finabonacci[] = $next;
        }
        return $finabonacci;
    }
    function pertenceFinabonacci(int $number) : void {
        $pertence = Finabonacci($number);

        if (in_array($number, $pertence)) {
            echo "o numero `$number` pertence a sequencia";
        }else{
            echo "o numero `$number` não pertence a sequencia";
        }
    }

pertenceFinabonacci(34);
?>
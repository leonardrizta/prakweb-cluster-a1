<?php
    function checkPrime($number){
        if ($number <= 1){ 
            return false; 
        }
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false; 
            }
        }
        return true;
    }

    echo "Bilangan Prima 1 - 50 adalah ";
    for ($i = 1; $i <= 50; $i++) {
        if(checkPrime($i)){
            echo $i . " ";
        }
    }
?>
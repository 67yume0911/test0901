<?php

for ($i = 1; $i<= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0 ) {
        echo 'FizzBuzz' ;
    } elseif ($i %5 ===0) {
        echo 'Buzz' ;
    } elseif ($i %3 ===0) {
        echo 'Fizz' ;
    } else {
        echo $i ;
    }
    echo '<br>';
}

for ($x = 1; $x <=10000; $x++){
    $point = 0;
    for ($y = 1; $y <= $x; $y++){
        if($x % $y ==0){
            $point +=1;
        }
    }
 if ($point == 2) {
     echo $x . "\n";
 }
 echo '<br>';
}
<?php
function xrange($min, $max) {
    for ($i = 0; $i < $max; $i++) {
        yield $i;
    }
}

foreach (xrange(1, 100000000) as $key => $value ) {
    echo "$key => $value"  . PHP_EOL; 
}


#https://stackoverflow.com/questions/17483806/what-does-yield-mean-in-php

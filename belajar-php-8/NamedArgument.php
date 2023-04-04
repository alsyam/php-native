<?php 
function sayHello(string $first, string $middle = "", string $last):void
{
    echo "Hello $first $middle $last". PHP_EOL;


    
}
// 
sayHello('Muh', 'ahmad', 'alsyam');
// sayHello('Muh', 'alsyam'); //error

// named argument
sayHello(middle: 'ahmad', last: 'alsyam' , first:'Muh');
// sayHello( first:'Muh',last: 'alsyam');
?>
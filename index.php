<?php
$int = 10;
$float = 1.22;
$str = 'hello';
$str2 = 'World';
$str3 = $str . ' ' . $str2;
$array = [1,2,3,4];
$null = null;
$array2= ['1' => 22];
$upperFirstItem = ucfirst($str);

function Foo ($value) {
   return $value + 22;
};

// print_r() ; // как console.log
// var_dump(); // как typeof

print_r(Foo($int)) ;
print_r($upperFirstItem) ;
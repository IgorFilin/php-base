<?php
// $int = 10;
// $float = 1.22;
// $str = 'hello';
// $str2 = 'World';
// $str3 = $str . ' ' . $str2;
// $array = [1,2,3,4];
// $null = null;
// $array2= ['1' => 22];
// $upperFirstItem = ucfirst($str);

// function Foo ($value) {
//    return $value + 22;
// };

// print_r() ; // как console.log
// var_dump(); // как typeof

// $replaceStr = str_replace('d','dd',$str2); // заменить в строке нужные символы

// print_r(Foo($int));
// print_r($upperFirstItem) ;
// print_r($replaceStr);

//===============================================================================================================================

$testArray = [['id'=> 1,'name'=> 'Igor','age'=> 28],['id'=> 2,'name'=> 'Alisa','age'=> 23],['id'=> 3,'name'=> 'Bob','age'=> 25]];

//==================================
function ageIncrementMap ($el){
   return [...$el,'age' => $el['age'] + 1];
}; // map

function filterArray ($el){
   return $el['id'] === 2;
}; // filter

function reduceArray ($acc,$curr){
    array_push($acc,$curr['name']);
    return $acc;
}; // reduce
//==================================

// $newArray = array_filter($testArray,"ageIncrement");
// $newArray = array_map("ageIncrementMap",$testArray);
// $newArray = array_reduce($testArray,"reduceArray",[]);
// $newArray = array_column($testArray,'name');

// print_r($newArray);

//===================================================================================================

// $testStr = 'Hello';

// $podStr = 'e';

// $posPodStr = strpos($testStr,$podStr);

// print_r($posPodStr);

//===============================================================================================================
$arr = [1,2,3,5,6,7,87];


$arr = new  ArrayObject($arr); // встроенный класс, преобразует в объект

$arr2 = $arr;

function test ($array){
   $array['23'] = 'bla';
};

test($arr);


$bol = $arr === $arr2;

print_r($arr);
print_r($arr2);

//массивы сравниваются и передаются по значению! по ссылке только объекты!

//==============================================================================================

<?php 
$array = [
    ['id' => 1, 'name' => 'Igor',  'age' => 28],
    ['id' => 1, 'name' => 'Alisa',  'age' => 25],
    ['id' => 1, 'name' => 'Bob',  'age' => 28]
];

for($i = 0;$i < count($array);$i++) {
    $temp = $array[$i]['name'];
      echo "<li>$temp</li>";
};
?>
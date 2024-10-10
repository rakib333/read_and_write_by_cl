<?php

print_r($argc);
echo PHP_EOL;
print_r($argv);


var_dump($argc);
echo PHP_EOL;
var_dump($argv);

echo PHP_EOL;

if(isset($argv[1])){
    $name = $argv[1];
    echo "My name is:  $name";
}else{
    echo  "nothing found";
}












?>